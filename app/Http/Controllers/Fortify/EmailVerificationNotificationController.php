<?php

namespace App\Http\Controllers\Fortify;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

class EmailVerificationNotificationController extends Controller
{
    use ApiResponseTrait;

    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if(!$user){
            return $this->error('No such user',404);
        }

        if ($user->hasVerifiedEmail()) {

            return $request->wantsJson()
                ? $this->error('Email already verified',422)
                : redirect()->intended(config('fortify.home'));
        }

        $user->sendEmailVerificationNotification();

        return $request->wantsJson()
            ? $this->success($user,'Verification email successfully sent')
            : back()->with('status', 'verification-link-sent');
    }
}
