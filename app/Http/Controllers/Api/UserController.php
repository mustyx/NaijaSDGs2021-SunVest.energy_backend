<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Resources\UserFullDataResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Users
 *
 * Manage user
 */

class UserController extends Controller
{
    use ApiResponseTrait;
    /**
     * GET Users
     *
     * List all users with extra details
     * @queryParam page Which page to show. Example: 3
     */
    public function index()
    {
        return $this->success(new UserResource(auth()->user()));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * GET User
     *
     * Get information on a single user
     * @param  string $id Example: username or id
     */
    public function show($id)
    {
        $user = User::where('id',$id)->orWhere('username',$id)->first();
        if ($user->id !== auth()->user()->id){
            return $this->error('Invalid user',403);
        }
        $user->load(['userdetail','investments','investments.project']);
        return $this->success(new UserFullDataResource($user));
    }

    /**
     * PUT User
     *
     * Update user data. This should be a POST request
     * @bodyParam  update_type string required in:profile,password What type of update whether for profile data or password. Example: "profile"
     * @bodyParam  _method string required This will tell backend to see it as an update request. Example: "PUT"
     * @bodyParam  firstName string Firstname of user. Example: "Damilare"
     * @bodyParam  lastName string Surname/Last name of user. Example: "Abi"
     * @bodyParam  phone numeric Phone number of user. Example: "Abi"
     * @bodyParam  current_password string min:6 Account password. Example: "123456"
     * @bodyParam  password string min:6 Account password. Example: "123456"
     * @bodyParam  password_confirmation string min:6 Retype account password. Example: "123456"
     */
    public function update(UpdateUserRequest $request, $id, UserService $userService)
    {
        $user = User::where('id',$id)->orWhere('username',$id)->first();
        if ($user->id !== auth()->user()->id){
            return $this->error('Invalid user',403);
        }
        switch ($request->update_type){
            case 'password':
                $update = $userService->updateUserPassword($request,$user);
                if (!$update) {
                    return $this->error('Invalid current password',400);
                }
                return $this->success([],'Password successfully updated');
                break;
            default:
                $userService->updateUserProfile($request,$user);
                return $this->success(new UserResource($user->refresh()),'Profile successfully updated');
        }
    }

    public function destroy($id)
    {
        //
    }
}
