<?php

namespace App\Providers;

use App\Models\Edition;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        // Return nav with editions
        View::composer('layouts.partials.nav', function ($view) {
            $columns = Schema::getColumnListing('editions');
            $editions = Edition::distinct()->select($columns)->orderByDesc('year')->get();

            // Also include username
            $username = Auth::user()->username;

            $view->with([
                'editions' => $editions,
                'username' => $username,
            ]);
        });
    }
}
