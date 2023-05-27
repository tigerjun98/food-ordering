<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Merchant\MerchantMenuItemController;
use App\Http\Controllers\Merchant\MerchantOrderController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:merchant']], function () {

    Route::customResources([
        'order'         => MerchantOrderController::class,
        'menu-item'     => MerchantMenuItemController::class,
        'profile'       => \App\Http\Controllers\Merchant\MerchantProfileController::class,
    ]);

    Route::get('/get-category-lists', [MerchantMenuItemController::class, 'getCategoryLists'])->name('get-category-lists');

    Route::post('/store-password', [\App\Http\Controllers\Merchant\MerchantProfileController::class, 'storePassword'])->name('store-password');
    Route::post('/store-category', [\App\Http\Controllers\Merchant\MerchantProfileController::class, 'storeCategory'])->name('profile.store-category');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::post('/store-password', [\App\Http\Controllers\Merchant\MerchantProfileController::class, 'storePassword'])->name('store-password');
    });
});
