<?php

namespace App\Providers;

use App\Mixins\RouteMixin;
use App\Traits\ApiResponser;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Vite;
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
        $this->loadMigrationsFrom(base_path() .'/database/migrations/**/*');
        Vite::useBuildDirectory('/backendAssets')->macro('image', fn ($asset) => $this->asset("resources/img/{$asset}"));
        Route::mixin(new RouteMixin);

    }

    protected function configureRateLimiting(): void
    {

    }
}
