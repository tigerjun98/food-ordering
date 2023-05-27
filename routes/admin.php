<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::group(['middleware' => ['auth:admin']], function () {

    Route::customResources([
        'user'          => UserController::class,
        'merchant'      => MerchantController::class,
        'profile'       => ProfileController::class,
        'category'      => CategoryController::class,
    ]);

    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::post('/store-password', [ProfileController::class, 'storePassword'])->name('store-password');
    });
});
