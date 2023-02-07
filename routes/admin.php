<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AccountController;

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
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home');

    // Route::customResource('user', UserController::class);

    Route::customResources([
        'user'      => UserController::class,
        'account'   => AccountController::class,
        'transaction' => 'App\Http\Controllers\Admin\TransactionController',
        'setting'   => 'App\Http\Controllers\Admin\SettingController',
    ]);

    Route::post('/option', [App\Http\Controllers\Admin\AdminController::class, 'selectOption'])->name('selectOption');

    Route::name('user.')->group(function () {
        Route::group(['prefix'=>'user'], function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\UserController::class, 'indexDt'])->name('indexDt');
        });
    });

    Route::name('transaction.')->group(function () {
        Route::group(['prefix'=>'transaction'], function () {

            Route::resources([
                'deposit'      => 'App\Http\Controllers\Admin\Transaction\DepositController',
            ], ['except' => ['show']]);

            Route::name('deposit.')->group(function () {
                Route::group(['prefix'=>'deposit'], function () {
                    Route::get('/', [App\Http\Controllers\Admin\Transaction\DepositController::class, 'index']);
                    Route::post('/dt', [App\Http\Controllers\Admin\Transaction\DepositController::class, 'indexDt'])->name('indexDt');
                    Route::post('/upload/image/{id}', [App\Http\Controllers\Admin\Transaction\DepositController::class, 'uploadDropzoneImage'])->name('uploadImage');
                    Route::post('/delete/image/{id}', [App\Http\Controllers\Admin\Transaction\DepositController::class, 'deleteDropzoneImage'])->name('deleteDropzoneImage');
                });
            });
        });
    });




    Route::name('log.')->group(function () {
        Route::group(['prefix'=>'log'], function () {
            Route::get('/', [App\Http\Controllers\Admin\LogController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\LogController::class, 'indexDt'])->name('indexDt');
        });
    });

    Route::name('setting.')->group(function () {
        Route::group(['prefix'=>'setting'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SettingController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\SettingController::class, 'indexDt'])->name('indexDt');
            Route::post('/upload/ckeditor', [App\Http\Controllers\Admin\SettingController::class, 'uploadEditorContent'])->name('uploadEditorContent');
            Route::post('/upload/image/{id}', [App\Http\Controllers\Admin\SettingController::class, 'uploadDropzoneImage'])->name('uploadImage');
            Route::post('/delete/image/{id}', [App\Http\Controllers\Admin\SettingController::class, 'deleteDropzoneImage'])->name('deleteDropzoneImage');
        });
    });

    Route::post('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');

    Route::get('/testing', function () {
        dd(\Illuminate\Support\Facades\Hash::make('123123'));
    });

});
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//require __DIR__.'/auth.php';
