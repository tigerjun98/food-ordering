<?php

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
Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', [App\Http\Controllers\User\UserController::class, 'home'])->name('home');
        Route::post('/option', [App\Http\Controllers\User\UserController::class, 'ajaxRequest'])->name('ajaxRequest');
        Route::get('/contact-us', [App\Http\Controllers\User\HomeController::class, 'contactUs'])->name('contactUs');
        Route::post('/contact-us', [App\Http\Controllers\User\HomeController::class, 'contactByEmail'])->name('contactByEmail');
        Route::get('/about', [App\Http\Controllers\User\HomeController::class, 'about'])->name('about');
        Route::get('/refund-policy', [App\Http\Controllers\User\HomeController::class, 'refundPolicy'])->name('refundPolicy');
        Route::get('/privacy-policy', [App\Http\Controllers\User\HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
        Route::get('/faq', [App\Http\Controllers\User\HomeController::class, 'faq'])->name('faq');

        Route::get('/login', [App\Http\Controllers\User\AuthController::class, 'login'])->name('login');
        Route::post('/login', [App\Http\Controllers\User\AuthController::class, 'submitLogin'])->name('submitLogin');
        Route::get('/register', [App\Http\Controllers\User\AuthController::class, 'register'])->name('register');
        Route::post('/register', [App\Http\Controllers\User\AuthController::class, 'submitRegister'])->name('submitRegister');
        Route::get('/forget-password', [App\Http\Controllers\User\AuthController::class, 'forgetPassword'])->name('forgetPassword');
        Route::post('/forget-password', [App\Http\Controllers\User\AuthController::class, 'submitForgetPassword'])->name('submitForgetPassword');
        Route::get('/reset-password', [App\Http\Controllers\User\AuthController::class, 'resetPassword'])->name('password.reset');
        Route::post('/reset-password/{token}', [App\Http\Controllers\User\AuthController::class, 'submitResetPassword'])->name('submitResetPassword');
    });


    Route::group(['middleware' => ['auth:user']], function () {

        Route::get('/account', [App\Http\Controllers\User\UserController::class, 'index'])->name('account');
        Route::post('/update', [App\Http\Controllers\User\UserController::class, 'update'])->name('account.update');
        Route::post('/logout', [App\Http\Controllers\User\UserController::class, 'logout'])->name('logout');

        Route::name('transaction.')->group(function () {
            Route::group(['prefix'=>'transaction'], function () {

                Route::name('deposit.')->group(function () {
                    Route::group(['prefix'=>'deposit'], function () {
                        Route::get('', [App\Http\Controllers\User\Transaction\DepositController::class, 'create'])->name('create');
                        Route::post('/{id}', [App\Http\Controllers\User\Transaction\DepositController::class, 'store'])->name('store');
                        Route::get('/history', [App\Http\Controllers\User\Transaction\DepositController::class, 'index'])->name('index');
                        Route::post('/dt', [App\Http\Controllers\User\Transaction\DepositController::class, 'indexDt'])->name('indexDt');
                        Route::post('/upload/image/{id}', [App\Http\Controllers\User\Transaction\DepositController::class, 'uploadDropzoneImage'])->name('uploadImage');
                        Route::post('/delete/image/{id}', [App\Http\Controllers\User\Transaction\DepositController::class, 'deleteDropzoneImage'])->name('deleteDropzoneImage');
                    });
                });


            });
        });

    });





    Route::get('/testing', function () {
        dd(\Illuminate\Support\Facades\Hash::make('123123'));

        $arr = \App\Models\Permission::getPermissionsLists();
        foreach ($arr as $key => $a){
            dd($key);
        }

        dd('123', $arr);
//        \Illuminate\Support\Facades\Artisan::call('db:seed');
        $user = \App\Models\User::find(1399250988);
        $data = \App\Models\OrderDetail::find(476859333);

        return view('mails.order_placed', compact('data'));

        $user->notify(new \App\Notifications\OrderPlacedNotification($order));



//        \Illuminate\Support\Facades\Notification::send($user, new \App\Notifications\OrderPlacedNotification($order));


//        $user->notifyNow($order);

        dd('123');



//    \Illuminate\Support\Facades\Mail::to('thetigerjun@gmail.com')->send(new \App\Mail\OrderShipped());
    });

    Route::get('/setLocale/{locale}', function ($locale) {
        if (! in_array($locale, ['en', 'cn'])) abort(400);
        \Illuminate\Support\Facades\Session::put('my_locale', $locale);
        $locale = \Illuminate\Support\Facades\Session::get('my_locale');
        return redirect()->back();
    })->name('setLocale');
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

require __DIR__.'/auth.php';
