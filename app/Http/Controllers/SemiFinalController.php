<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SemiFinalController extends Controller
{
    /**
     * Returns a semi final view by its year and stage
     */
    public function index($year, $stage)
    {
        $rules = [
            'year' => [
                'required',
                'exists:editions,year'
            ],
            'stage' => 'required|exists:participants,semi_final'
        ];

        $validator = Validator::make(['year' => $year, 'stage' => $stage], $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $participants = $this->participantsInSemiFinal($year, $stage);
        return view('home.semi_final', compact('participants', 'year', 'stage'));
    }

    /**
     * Returns the participants in a semi final
     * by their year and stage.
     */
    public function participantsInSemiFinal($year, $stage)
    {
        $userId = Auth::id();
        $participants = $this->participantsByUserYearAndStage($userId, $year, $stage);
        return $participants;
    }

    /**
     * Loads all participants by their given year and stage,
     * along with the user's scores assigned to them.
     */
    public function participantsByUserYearAndStage($userId, $year, $stage)
    {
        $participants = Participant::whereHas('edition', function ($query) use ($year) {
            $query->where('year', $year);
        })->where('semi_final', $stage)
            ->with(['scores' => function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }])
            ->orderBy('semi_final_order')
            ->get();

        return $participants;
    }
}
