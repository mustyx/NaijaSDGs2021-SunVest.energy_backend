<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\InvestmentController;

use App\Http\Controllers\Api\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Api\Admin\UserController as AdminUserController;
use App\Http\Controllers\Api\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Api\Admin\InvestmentController as AdminInvestmentController;

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return ['success'=>true];
});
Route::get('/me', function () {
    return ['success'=>config('app.apiUrl')];
});*/
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/marketplace', [HomeController::class,'marketplace'])->name('marketplace');
Route::get('/marketplace/{project}', [HomeController::class,'project'])->name('project');

// Authentication...
// user controller routes
Route::post("register", [AuthController::class, "register"]);

Route::post("login", [AuthController::class, "login"]);

$limiter = config('fortify.limiters.login');
/*Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter(['guest', $limiter ? 'throttle:'.$limiter : null,
    ]));

// Registration...
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);*/

// Email Verification...
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['guest', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['guest', 'throttle:6,1'])
    ->name('verification.send');


//Main app routes
Route::prefix('dashboard')->middleware(['auth:api','verified'])->group(function (){
//    Route::get('/user',[Usercontroller::class,'index']);
//    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/logout', [AuthController::class, 'logout']);

/*    // Password Reset...
    if (Features::enabled(Features::resetPasswords())) {
        if ($enableViews) {
            Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware(['guest'])
                ->name('password.request');

            Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware(['guest'])
                ->name('password.reset');
        }

        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->middleware(['guest'])
            ->name('password.email');

        Route::post('/reset-password', [NewPasswordController::class, 'store'])
            ->middleware(['guest'])
            ->name('password.update');
    }


    // Profile Information...
    if (Features::enabled(Features::updateProfileInformation())) {
        Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-profile-information.update');
    }

    // Passwords...
    if (Features::enabled(Features::updatePasswords())) {
        Route::put('/user/password', [PasswordController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-password.update');
    }

    // Password Confirmation...
    if ($enableViews) {
        Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->middleware(['auth'])
            ->name('password.confirm');
    }

    Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirmation');

    Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware(['auth']);
*/

    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function (){
        Route::get('/',[AdminDashboardController::class,'index'])->name('dashboard');
        Route::apiResource('users',AdminUserController::class);
        Route::apiResource('projects',AdminProjectController::class);
        Route::apiResource('investments',AdminInvestmentController::class);
    });

    Route::name('user.')->middleware('role:user')->group(function (){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::apiResource('users',UserController::class);
        Route::apiResource('projects',ProjectController::class);
        Route::apiResource('investments',InvestmentController::class);
    });
});


Route::post('/pay', [PaymentController::class,'redirectToGateway'])->name('pay');
Route::get('/payment/callback/rave', [PaymentController::class,'raveCallback'])->name('raveCallback');
