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
            $user = Auth::user();
            $editions = Edition::getAccesibleToUser($user)->orderByDesc('year')->get();

            // Split editions into main and archived
            $total = $editions->count();
            $showArchive = $total > 5;
            $mainEditions = $showArchive ? $editions->take(4) : $editions;
            $archivedEditions = $showArchive ? $editions->slice(4) : collect();

            // Also include username
            $username = $user->username;

            $view->with([
                'mainEditions' => $mainEditions,
                'archivedEditions' => $archivedEditions,
                'username' => $username,
            ]);
        });
    }
}
