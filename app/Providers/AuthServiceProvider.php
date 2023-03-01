<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });

//        foreach (Admin::getPermissionsLists() as $key => $list){
//            Gate::define($key, function ($user) use($key){
//                $permissions = explode(",", $user->permissions);
//                if (in_array($key, $permissions)) {
//                    return true;
//                }
//                return false;
//            });
//        }
    }
}
