<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Fortify::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        // register new responses
        $this->app->singleton(
            \Laravel\Fortify\Contracts\RegisterResponse::class,
            \App\Http\Responses\RegisterResponse::class
        );
        $this->app->singleton(
            \Laravel\Fortify\Contracts\LoginResponse::class,
            \App\Http\Responses\LoginResponse::class
        );

        // Register new requests
        $this->app->singleton(
            \Laravel\Fortify\Http\Requests\VerifyEmailRequest::class,
            \App\Http\Requests\Fortify\VerifyEmailRequest::class
        );

        // register new controllers
        $this->app->singleton(
            \Laravel\Fortify\Http\Controllers\VerifyEmailController::class,
            \App\Http\Controllers\Fortify\VerifyEmailController::class
        );
        $this->app->singleton(
            \Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController::class,
            \App\Http\Controllers\Fortify\EmailVerificationNotificationController::class
        );
        $this->app->singleton(
            \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class,
            \App\Http\Controllers\Fortify\AuthenticatedSessionController::class
        );
    }
}
