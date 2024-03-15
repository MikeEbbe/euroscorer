<?php

namespace App\Http\Controllers;

use App\Models\Edition;

class HomeController extends Controller
{
    /**
     * This method redirects the user to the most recent edition
     * of the Eurovision Song Contest.
     */
    public function index()
    {
        $currentStage = Edition::getCurrentStage();
        
        return redirect()->route($currentStage['route'], ['year' => $currentStage['year'], 'stage' => $currentStage['stage'] ?? null]);
    }
}
