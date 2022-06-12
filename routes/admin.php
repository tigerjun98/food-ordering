<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'submitLogin'])->name('submitLogin');
Route::post('/register', [App\Http\Controllers\Admin\AuthController::class, 'submitRegister'])->name('register');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');

    Route::resources([
        'product'   => 'App\Http\Controllers\Admin\ProductController',
        'promotion' => 'App\Http\Controllers\Admin\PromotionController',
        'user'      => 'App\Http\Controllers\Admin\UserController',
        'order'     => 'App\Http\Controllers\Admin\OrderController',
        'commission'=> 'App\Http\Controllers\Admin\CommissionController',
        'setting'   => 'App\Http\Controllers\Admin\SettingController',
        'account'   => 'App\Http\Controllers\Admin\AccountController',
    ],
        ['except' => ['show']
    ]);

    Route::name('commission.')->group(function () {
        Route::group(['prefix'=>'commission'], function () {
            Route::get('/', [App\Http\Controllers\Admin\CommissionController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\CommissionController::class, 'indexDt'])->name('indexDt');
        });
    });

    Route::name('account.')->group(function () {
        Route::group(['prefix'=>'account'], function () {
            Route::get('/', [App\Http\Controllers\Admin\AccountController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\AccountController::class, 'indexDt'])->name('indexDt');
        });
    });

    Route::post('/option', [App\Http\Controllers\Admin\AdminController::class, 'selectOption'])->name('selectOption');

    Route::name('location.')->group(function () {
        Route::group(['prefix'=>'location'], function () {
            Route::post('/area', [App\Http\Controllers\Admin\LocationController::class, 'getArea'])->name('area');
        });
    });

    Route::name('order.')->group(function () {
        Route::group(['prefix'=>'order'], function () {
            Route::get('/', [App\Http\Controllers\Admin\OrderController::class, 'index']);
            Route::get('/test', [App\Http\Controllers\Admin\OrderController::class, 'test'])->name('test');
            Route::post('/dt', [App\Http\Controllers\Admin\OrderController::class, 'indexDt'])->name('indexDt');
            Route::get('/view/{id}', [App\Http\Controllers\Admin\OrderController::class, 'view'])->name('view');
            Route::get('/getUserInfo/{username}', [App\Http\Controllers\Admin\OrderController::class, 'getUserInfo'])->name('getUserInfo');
            Route::post('/getProductPrice', [App\Http\Controllers\Admin\OrderController::class, 'getProductPrice'])->name('getProductPrice');
        });
    });

    Route::name('promotion.')->group(function () {
        Route::group(['prefix'=>'promotion'], function () {
            Route::get('/', [App\Http\Controllers\Admin\PromotionController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\PromotionController::class, 'indexDt'])->name('indexDt');
            Route::post('/upload/image/{id}/lang/{lang}', [App\Http\Controllers\Admin\PromotionController::class, 'uploadDropzoneImage'])->name('uploadImage');
            Route::post('/delete/image/{id}/lang/{lang}', [App\Http\Controllers\Admin\PromotionController::class, 'deleteDropzoneImage'])->name('deleteDropzoneImage');
        });
    });

    Route::name('user.')->group(function () {
        Route::group(['prefix'=>'user'], function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\UserController::class, 'indexDt'])->name('indexDt');
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


    Route::name('product.')->group(function () {
        Route::group(['prefix'=>'product'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\ProductController::class, 'indexDt'])->name('indexDt');
            Route::post('/upload/image/{id}', [App\Http\Controllers\Admin\ProductController::class, 'uploadDropzoneImage'])->name('uploadImage');
            Route::post('/delete/image/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteDropzoneImage'])->name('deleteDropzoneImage');
            Route::post('/upload/ckeditor', [App\Http\Controllers\Admin\ProductController::class, 'uploadEditorContent'])->name('uploadEditorContent');
            Route::post('/browser/ckeditor', [App\Http\Controllers\Admin\ProductController::class, 'browserEditorContent'])->name('browserEditorContent');
        });
    });

    Route::name('sales.')->group(function () {
        Route::group(['prefix'=>'sales'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SalesController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\Admin\SalesController::class, 'indexDt'])->name('indexDt');
            Route::post('/report', [App\Http\Controllers\Admin\SalesController::class, 'export'])->name('export');
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
