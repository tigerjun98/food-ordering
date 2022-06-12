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
        Route::get('/about-us', [App\Http\Controllers\User\HomeController::class, 'aboutUs'])->name('aboutUs');
        Route::get('/refund-policy', [App\Http\Controllers\User\HomeController::class, 'refundPolicy'])->name('refundPolicy');
        Route::get('/privacy-policy', [App\Http\Controllers\User\HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
        Route::get('/faq', [App\Http\Controllers\User\HomeController::class, 'faq'])->name('faq');

        Route::get('/login', [App\Http\Controllers\User\AuthController::class, 'login'])->name('login');
        Route::post('/login', [App\Http\Controllers\User\AuthController::class, 'submitLogin'])->name('submitLogin');
        Route::post('/register', [App\Http\Controllers\User\AuthController::class, 'submitRegister'])->name('register');
        Route::get('/forget-password', [App\Http\Controllers\User\AuthController::class, 'forgetPassword'])->name('forgetPassword');
        Route::post('/forget-password', [App\Http\Controllers\User\AuthController::class, 'submitForgetPassword'])->name('submitForgetPassword');
        Route::get('/reset-password', [App\Http\Controllers\User\AuthController::class, 'resetPassword'])->name('password.reset');
        Route::post('/reset-password/{token}', [App\Http\Controllers\User\AuthController::class, 'submitResetPassword'])->name('submitResetPassword');

    });

    Route::get('/product', [App\Http\Controllers\User\ProductController::class, 'index'])->name('product');
    Route::get('/product/{id}', [App\Http\Controllers\User\ProductController::class, 'show'])->name('product.show');

    Route::name('promotion.')->group(function () {
        Route::group(['prefix'=>'promotions'], function () {
            Route::get('/', [App\Http\Controllers\User\PromotionController::class, 'index']);
            Route::get('/dt', [App\Http\Controllers\User\PromotionController::class, 'indexDt'])->name('indexDt');
        });
    });

    Route::group(['middleware' => ['auth:user']], function () {
        Route::get('/account', [App\Http\Controllers\User\UserController::class, 'index'])->name('account');
        Route::post('/update', [App\Http\Controllers\User\UserController::class, 'update'])->name('account.update');
        Route::post('/updateAddress', [App\Http\Controllers\User\UserController::class, 'updateAddress'])->name('account.updateAddress');
        Route::post('/logout', [App\Http\Controllers\User\UserController::class, 'logout'])->name('logout');

        Route::name('order.')->group(function () {
            Route::group(['prefix'=>'order'], function () {
//                Route::get('/', [App\Http\Controllers\User\OrderController::class, 'index']);
//                Route::post('/dt', [App\Http\Controllers\User\OrderController::class, 'indexDt'])->name('indexDt');
//                Route::get('/edit/{id}', [App\Http\Controllers\User\OrderController::class, 'edit'])->name('edit');
                Route::post('/receive/{id}', [App\Http\Controllers\User\OrderController::class, 'receivedOrder'])->name('received');
                Route::get('/review/{id}', [App\Http\Controllers\User\OrderController::class, 'review'])->name('review');
                Route::post('/submitReview', [App\Http\Controllers\User\OrderController::class, 'submitReview'])->name('submitReview');
            });
        });

        Route::name('payment.')->group(function () {
            Route::group(['prefix'=>'payment'], function () {
                Route::post('resubmit/{id}', [App\Http\Controllers\User\PaymentController::class, 'resubmit'])->name('resubmit');
                Route::post('/{id}', [App\Http\Controllers\User\PaymentController::class, 'requestPaymentId'])->name('request');
            });
        });
    });

    Route::name('order.')->group(function () {
        Route::group(['prefix'=>'order'], function () {
            Route::get('/', [App\Http\Controllers\User\OrderController::class, 'index']);
            Route::post('/dt', [App\Http\Controllers\User\OrderController::class, 'indexDt'])->name('indexDt');
            Route::get('/edit/{id}', [App\Http\Controllers\User\OrderController::class, 'edit'])->name('edit');
            Route::post('/cancel/{id}', [App\Http\Controllers\User\OrderController::class, 'cancelOrder'])->name('cancel');
        });
    });

    Route::name('payment.')->group(function () {
        Route::group(['prefix'=>'payment'], function () {
            Route::get('/{id}', [App\Http\Controllers\User\PaymentController::class, 'index']);
            Route::post('resubmit/{id}', [App\Http\Controllers\User\PaymentController::class, 'resubmit'])->name('resubmit');
            Route::post('/{id}', [App\Http\Controllers\User\PaymentController::class, 'requestPaymentId'])->name('request');
        });
    });




//Route::post('/payment/{id}', [App\Http\Controllers\User\OrderController::class, 'requestPaymentId'])->name('requestPayment');
//Route::get('/payment/{id}', [App\Http\Controllers\User\OrderController::class, 'payment'])->name('payment');
    Route::get('/checkout', [App\Http\Controllers\User\OrderController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [App\Http\Controllers\User\OrderController::class, 'submitOrder'])->name('submitOrder');

    Route::group(['middleware' => 'throttle:100,1'], function () {
        Route::post('/RMCallback/{orderId}', [App\Http\Controllers\User\PaymentController::class, 'paymentCallback']);
    });

// for cpanel
//Route::get('/link', function () {
//    $target = '/home/lewin/app/storage/app/public';
//    $shortcut = '/home/lewin/public_html/storage';
//    symlink($target, $shortcut);
//});


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

//require __DIR__.'/auth.php';
