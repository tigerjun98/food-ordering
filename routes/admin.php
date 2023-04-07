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
use App\Http\Controllers\Admin\AttachmentController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PrintTemplateController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\FeeController;
use App\Http\Controllers\Admin\AppointmentController;
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

    // Route::customResource('user', UserController::class);

    Route::customResources([
        'role'              => RoleController::class,
        'user'              => UserController::class,
        'queue'             => QueueController::class,
        'account'           => AccountController::class,
        'medicine'          => MedicineController::class,
        'option'            => OptionController::class,
        'consultation'      => ConsultationController::class,
        'attachment'        => AttachmentController::class,
        'print-template'    => PrintTemplateController::class,
        'group'             => GroupController::class,
        'profile'           => ProfileController::class,
        'fee'               => FeeController::class,
        'appointment'       => AppointmentController::class,
    ]);

    Route::post('/option', [AdminController::class, 'selectOption'])->name('selectOption');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('home');
    Route::get('/get-doctor-opt', [MainController::class, 'getDoctorOpt'])->name('get-doctor-opt');
    Route::get('/get-user-opt', [MainController::class, 'getUserOpt'])->name('get-user-opt');

    Route::post('/get-queue-count', [DashboardController::class, 'getQueueCount'])->name('get-queue-count');

    Route::group(['prefix' => 'print-template', 'as' => 'print-template.'], function () {
        Route::get('/get-checked-item/{id}', [PrintTemplateController::class, 'getCheckedItem'])->name('get-checked-item');
    });

    Route::group(['prefix' => 'consultation', 'as' => 'consultation.'], function () {
//        Route::get('/print/{consultId}', [ConsultationController::class, 'print'])->name('print');

        Route::group(['prefix' => 'print', 'as' => 'print.'], function () {
            Route::get('/{consultId}', [ConsultationController::class, 'print'])->name('index');
            Route::post('/{consultId}', [ConsultationController::class, 'printSubmit'])->name('submit');
            Route::get('/option/{consultId}', [ConsultationController::class, 'printOption'])->name('option');
        });

        Route::get('/get-option/{type}', [ConsultationController::class, 'getSelectOpt'])->name('get-opt');
        Route::get('/get-medicine-opt', [ConsultationController::class, 'getMedicineOpt'])->name('get-medicine-opt');
        Route::get('/get-patient-history/{patientId}', [ConsultationController::class, 'getPatientHistory'])->name('get-patient-history');
        Route::get('/get-patient-card/{patientId}', [ConsultationController::class, 'getPatientCard'])->name('get-patient-card');
    });

    Route::group(['prefix' => 'queue', 'as' => 'queue.'], function () {
        Route::post('/send-to-pos-system', [QueueController::class, 'sendToPosSystem']);
        Route::post('/serve/{queueId}', [QueueController::class, 'serve'])->name('serve');
        Route::post('/update-sorting/{queueId}', [QueueController::class, 'updateSorting'])->name('update-sorting');
        Route::get('/edit-box/{queueId}', [QueueController::class, 'editBox'])->name('edit-box');
        // Route::get('/listing/{roleId}', [QueueController::class, 'listing'])->name('listing');
        Route::get('/get-specific-box/{queueId}', [QueueController::class, 'getSpecificBox'])->name('get-specific-box');
        Route::post('/get-total-queue/{doctorId}', [QueueController::class, 'getTotalQueue'])->name('get-total-queue');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/search-patient', [UserController::class, 'searchPatient'])->name('search-patient');
    });

    Route::name('user.')->group(function () {
        Route::get('/home', [App\Http\Controllers\Admin\UserController::class, 'index']);
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::post('/store-password', [ProfileController::class, 'storePassword'])->name('store-password');
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
