<?php

namespace App\Providers;

use App\Mixins\RouteMixin;
use App\Traits\ApiResponser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    use ApiResponser;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

//        Str::macro('isLength', function ($str, $length) {
//            return static::length($str) == $length;
//        });

        Route::mixin(new RouteMixin);

        Route::macro('lilian', function($name, $class){
            return Route::group([ 'prefix'=> $name, 'as' => $name.'.' ], function () use ($class){
                Route::get('', [$class, 'index'])->name('index');
                Route::get('show/{id}', [$class, 'show'])->name('show');
                Route::get('/create', [$class, 'create'])->name('create');
                Route::post('/store', [$class, 'store'])->name('store');
                Route::get('/edit/{id}', [$class, 'edit'])->name('edit');
                Route::post('edit/{id}', [$class, 'update'])->name('update');
                Route::get('destroy/{id}', [$class, 'delete'])->name('destroy');
                Route::delete('destroy/{id}', [$class, 'destroy'])->name('destroy');
            });

        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('add-cart', function (Request $request) {
            return Limit::perMinute(100)->response(function() {
                return $this->error('Beep! Beep! Too many attempts', 401);
            });
        });

    }
}
