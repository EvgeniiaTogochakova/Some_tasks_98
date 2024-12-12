<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
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
    public function boot(): void
    {
        // Gate::define('view-users', function(User $user){
        //     return $user->isAdmin();
        // });            // это было для гейта
        
        Gate::policy(User::class, UserPolicy::class);      //а это привязка политики к модели
    }
}
