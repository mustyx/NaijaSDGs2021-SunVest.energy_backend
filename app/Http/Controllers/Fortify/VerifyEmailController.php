<?php

namespace App\Http\Controllers\Fortify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fortify\VerifyEmailRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
//use Illuminate\Routing\Controller;
use App\Traits\ApiResponseTrait;

class VerifyEmailController extends Controller
{
    use ApiResponseTrait;

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \App\Http\Requests\Fortify\VerifyEmailRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(VerifyEmailRequest $request): JsonResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $request->wantsJson() ? $this->error('Email already verified',422) : redirect()->intended(config('fortify.home').'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return $request->wantsJson() ? $this->success('','Email successfully verified') :  redirect()->intended(config('fortify.home').'?verified=1');
    }
}
