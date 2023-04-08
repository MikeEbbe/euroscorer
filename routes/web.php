<?php

use App\Models\Participant;
use App\Models\Score;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Route::get('/participants', function() {
    //     return Participant::with('country')->get();
    // });

    // Route::get('/scores', function() {
    //     return Score::with('user', 'participant')->get();
    // });

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Home Routes
         */
        // Route::get('/', function() {
        //     return redirect('/login');
        // });
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LoginController@logout')->name('logout.perform');
        Route::get('/', 'HomeController@index')->name('home.index');
    });
});

// interfaces:
//  home knop leidt door naar finale interface van huidig eurovisie seizoen
//  interface voor elk eurovisie seizoen: 2021, 2022 en 2023:
//      1e halve finale met uitslagen
//      2e halve finale met uitslagen
//      finale met uitslagen
//      scores invullen