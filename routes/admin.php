<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\QueueController;
use App\Http\Controllers\Admin\MainController;
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
        'queue'         => QueueController::class,
        'account'       => AccountController::class,
        'medicine'      => MedicineController::class,
        'option'        => OptionController::class,
        'consultation'  => ConsultationController::class,
    ]);


    Route::post('/option', [AdminController::class, 'selectOption'])->name('selectOption');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('home');
    Route::get('/get-doctor-opt', [MainController::class, 'getDoctorOpt'])->name('get-doctor-opt');

    Route::group(['prefix' => 'consultation', 'as' => 'consultation.'], function () {
        Route::get('/get-option/{type}', [ConsultationController::class, 'getSelectOpt'])->name('get-opt');
        Route::get('/get-medicine-opt', [ConsultationController::class, 'getMedicineOpt'])->name('get-medicine-opt');
        Route::get('/get-patient-history/{patientId}', [ConsultationController::class, 'getPatientHistory'])->name('get-patient-history');
        Route::get('/get-patient-card/{patientId}', [ConsultationController::class, 'getPatientCard'])->name('get-patient-card');

    });

    Route::group(['prefix' => 'queue', 'as' => 'queue.'], function () {
        Route::post('/serve/{queueId}', [QueueController::class, 'serve'])->name('serve');
    });

    // Route::customResource('user', UserController::class);

    Route::name('user.')->group(function () {
        Route::get('/home', [App\Http\Controllers\Admin\UserController::class, 'index']);
    });



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
