<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Check if local_vars.php exists
        if (file_exists(config_path('local_vars.php'))) {
            // Override the main configuration
            $localVars = require config_path('local_vars.php');
            $vars = config('vars');
            
            config(['vars' => array_merge($vars, $localVars)]);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
