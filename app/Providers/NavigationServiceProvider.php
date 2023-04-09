<?php

namespace App\Providers;

use App\Models\Edition;
use App\Models\Participant;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Return nav with years
        View::composer('layouts.partials.nav', function ($view) {
            $years = Edition::distinct()->pluck('year')->reverse();
            $view->with('years', $years);
        });
    }
}
