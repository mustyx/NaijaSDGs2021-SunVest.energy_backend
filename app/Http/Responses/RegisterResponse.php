<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use App\Traits\ApiResponseTrait;

class RegisterResponse implements RegisterResponseContract
{
    use ApiResponseTrait;

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        return $request->wantsJson()
            ? $this->success(auth()->user(),'Registration successful. Please check your email for the verification link',201)
            : redirect()->intended(config('fortify.home'));
    }

}
