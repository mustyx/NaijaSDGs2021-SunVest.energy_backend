<?php

namespace App\Actions\Fortify;

use App\Jobs\CreateUserdetailJob;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
//            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone' => ['required','numeric'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        //Add records to userdetails table
        $user->userdetail()->create($input);
//        CreateUserdetailJob::dispatch($user,$input);

        return $user;
    }
}
