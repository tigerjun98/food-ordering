<?php

namespace App\Providers;

use App\Traits\ApiResponser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

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
