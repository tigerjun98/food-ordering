<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected $guards;

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;
        return parent::handle($request, $next, ...$guards);
    }

    protected function redirectTo($request)
    {

        if (! $request->expectsJson()) {

            if($request->path() == 'admin/horizon/dashboard'){
                return route('admin.login');
            }

            if(Route::is('admin.*')){
                return route('admin.login');
            }

            return route('login');
        }
    }
}
