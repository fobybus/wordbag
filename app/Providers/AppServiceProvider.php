<?php

namespace App\Providers;

use App\Models\Note;
use App\Policies\notepolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //explicitly inject service 
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // register policy for model 
        Gate::policy(Note::class,notepolicy::class);  
    }
}
