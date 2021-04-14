<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use Illuminate\Support\Facades\Hash;


/**
 * @group Users - ADMIN
 *
 * Manage users
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
        $users = User::with('userdetail')->get();
        return $this->success(UserResource::collection($users));
//        return UserResource::collection($users);
    }

    /**
     * POST User
     *
     * Create a new user
     * @bodyParam  firstName string required Firstname of user. Example: "Damilare"
     * @bodyParam  lastName string required Surname/Last name of user. Example: "Abi"
     * @bodyParam  email email required Email address of user. Example: "test@test.com"
     * @bodyParam  phone numeric Phone number of user. Example: "Abi"
     * @bodyParam  password string required min:6 Account password. Example: "123456"
     * @bodyParam  password_confirmation string required min:6 Retype account password. Example: "123456"
     */
    public function store(StoreUserRequest $request, UserService $userService)
    {
        $user = $userService->createNewUser($request);
        if(!is_null($user)) {
            return $this->success(null,'Registration successful and email verification sent',201);
        }
        return $this->error('Registration failed',400);

    }

    /**
     * GET User
     *
     * Get information on a single user
     * @param  string $id Example: username or id
     */
    public function show($id)
    {
        $user = User::with('userdetail')->where('id',$id)->orWhere('username',$id)->first();
        return $this->success(new UserResource($user));
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


    /**
     * DELETE User
     *
     * Soft delete a user. This should be a POST request
     * @param  string $id
     * @bodyParam _method string required This will tell backend that its actually a delete request. Example: "DELETE"
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->orWhere('username',$id)->first();
        $user->delete();
        return $this->success([],'User soft-deleted successfully.');
    }
}