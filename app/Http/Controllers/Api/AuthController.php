<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Fortify;
use App\Actions\Fortify\PasswordValidationRules;
use App\Traits\ApiResponseTrait;


/**
 * @group Auth
 *
 * Manage authentication routes
 */

class AuthController extends Controller
{
    use PasswordValidationRules,ApiResponseTrait;
    // User Register
    public function register(Request $request) {
        $validator  =   Validator::make($request->all(), [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255',Rule::unique(User::class),
            ],
            'phone' => ['required','numeric'],
            'password' => $this->passwordRules(),
        ]);

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_errors" => $validator->errors()]);
        }

        $slug = SlugService::createSlug(User::class, 'username', $request['firstName'], ['unique' => true]);
        $user = User::create([
            'username' => $slug,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        //Add records to userdetails table
        $user->userdetail()->create($request->all());

        //Attach role to user
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
        if($user->id === 1){
            $user->attachRole($adminRole);
        }
        else{
            $user->attachRole($userRole);
        }

        $user->sendEmailVerificationNotification();

        if(!is_null($user)) {
            return $this->success(auth()->user(),'Registration successful. Please check your email for the verification link',201);
        }
        return $this->error('Registration failed');
    }

    // User login
    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            "email" =>  "required|email",
            "password" =>  "required",
        ]);

        if($validator->fails()) {
            return $this->error('Invalid credentials',422,$validator->errors());
        }

        $user = User::where("email", $request->email)->first();

        if(is_null($user)) {
            return $this->error('Invalid email',422);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            return $this->success(['user'=>auth()->user(),'token'=>$token],'Login successful',201);
        }
        return $this->error('Invalid email/password',422);
    }


    // User Detail
    public function user() {
        $user = Auth::user();
        if(!is_null($user)) {
            return $this->success(auth()->user(),'Success',200);
        }

        return $this->error('No user found',422);
    }

    public function logout(){
        $user = Auth::user();

        $user->tokens()->delete();
//        $user->currentAccessToken()->delete();
        return $this->success(null,'Successfully logged out',200);
    }
}
