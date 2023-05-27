<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserOrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::customResources([
        'attachment'    => \App\Http\Controllers\AttachmentController::class,
    ]);

    Route::group(['middleware' => ['auth:user']], function () {

        Route::customResources([
            'order'         => UserOrderController::class,
            'profile'       => \App\Http\Controllers\User\UserProfileController::class,
            'merchant'      => \App\Http\Controllers\User\UserMerchantController::class,
            'order-item'    => \App\Http\Controllers\User\UserOrderItemController::class,
            'category'      => \App\Http\Controllers\User\UserCategoryController::class,
        ]);

        Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
            Route::get('/checkout/{id}', [UserOrderController::class, 'checkout'])->name('checkout');
            Route::get('/menu-item/{id}', [UserOrderController::class, 'showMenuItem'])->name('show-menu-item');
        });
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::post('/store-password', [\App\Http\Controllers\User\UserProfileController::class, 'storePassword'])->name('store-password');
    });
});

require __DIR__.'/auth.php';
