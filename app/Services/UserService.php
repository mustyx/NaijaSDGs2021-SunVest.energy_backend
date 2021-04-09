<?php
namespace App\Services;

use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createNewUser($request){
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
        $user->refresh();
        if($user->id === 1){
            $user->attachRole($adminRole);
        }
        else{
            $user->attachRole($userRole);
        }

        $user->sendEmailVerificationNotification();

        return $user;
    }

    public function updateUserPassword($request,$user){
        if (! isset($request->current_password) || ! Hash::check($request->current_password, $user->password)) {
            return false;
        }

        $user->password = Hash::make($request->password);
        $user->save();
        return true;
    }

    public function updateUserProfile($request,$user){
        $user->userdetail()->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
        ]);
    }
}
