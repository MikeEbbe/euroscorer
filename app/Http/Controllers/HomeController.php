<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * This method redirects the user to the most recent edition
     * of the Eurovision Song Contest
     */
    public function index()
    {
        $year = Edition::max('year'); // Get latest year
        return redirect()->route('semi-final.index', ['year' => $year, 'stage' => 1]); // Redirect to semi final 1 of latest year
        // return redirect()->route('semi-final.index', ['year' => $year, 'stage' => 2]); // Redirect to semi final 2 of latest year
        // return redirect()->route('final.index', ['year' => $year]); // Redirect to final of latest year
    }
}
