<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
        Route::get('/login', [AdminAuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/submit-login', [AdminAuthenticatedSessionController::class, 'store'])->name('submit-login');
    });

    Route::group(['prefix'=>'merchant', 'as'=>'merchant.'], function () {
        Route::get('/login', [\App\Http\Controllers\Merchant\Auth\MerchantAuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/submit-login', [\App\Http\Controllers\Merchant\Auth\MerchantAuthenticatedSessionController::class, 'store'])->name('submit-login');
        Route::get('/register', [\App\Http\Controllers\Merchant\Auth\RegisteredMerchantController::class, 'create'])->name('register');
        Route::post('/submit-register', [\App\Http\Controllers\Merchant\Auth\RegisteredMerchantController::class, 'store'])->name('submit-register');
        Route::post('logout', [\App\Http\Controllers\Merchant\Auth\MerchantAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });

    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('submit-register', [RegisteredUserController::class, 'store'])->name('submit-register');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('submit-login', [AuthenticatedSessionController::class, 'store'])->name('submit-login');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
