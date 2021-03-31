<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Traits\ApiResponseTrait;

class LoginResponse implements LoginResponseContract
{
    use ApiResponseTrait;

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        return $request->wantsJson()
            ? $this->success(auth()->user(),'Successfully logged in.',201)
            : redirect()->intended(config('fortify.home'));
    }

}
