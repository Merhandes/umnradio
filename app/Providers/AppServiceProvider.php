<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        Blade::if('admin', function () {
            $user = Auth::user();
            $roles = $user->roles->pluck('role')->toArray();
            return auth()->user() && in_array(2, $roles);
        });

        Blade::if('bendahara', function () {
            $user = Auth::user();
            $roles = $user->roles->pluck('role')->toArray();
            return auth()->user() && in_array(3, $roles);
        });

        Blade::if('news', function () {
            $user = Auth::user();
            $roles = $user->roles->pluck('role')->toArray();
            return auth()->user() && in_array(4, $roles);
        });
    }
}
