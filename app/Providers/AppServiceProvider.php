<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        Fortify::authenticateUsing(function ($request) {
            $credentials = $request->only('email', 'password');
    
            // Restrict login to only @brightframe.co.zw emails
            if (!str_ends_with($credentials['email'], '@brightframe.co.zw')) {
                return null;
            }
    
            if (Auth::attempt($credentials)) {
                return Auth::user();
            }
    
            return null;
        });
    }
    
}
