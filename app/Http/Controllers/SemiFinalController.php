<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SemiFinalController extends Controller
{
    /**
     * Returns a semi final view by its year and stage.
     * @param Int $year - Year of the edition
     * @param Int $stage - Stage of the semi final
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

        $user = Auth::user();
        $scores = $this->scoresByUserYearAndStage($user, $year, $stage);
        $edition = Edition::where('year', $year)->first();

        return view('home.semi_final', compact('scores', 'edition', 'stage'));
    }

    /**
     * Loads all scores for a user by their given year and stage,
     * sorted by the assigned user score.
     * @param Authenticatable $user - Logged in user
     * @param Int $year - Year of the edition
     * @param Int $stage - Stage of the semi final
     */
    public function scoresByUserYearAndStage($user, $year, $stage)
    {
        $scores = $user->scores()
            ->with('participant')
            ->whereHas('participant', function ($query) use ($year, $stage) {
                $query->where('semi_final', $stage)->whereHas('edition', function ($query) use ($year) {
                    $query->where('year', $year);
                });
            })
            ->get();

        $scores = $this->orderScores($scores);

        return $scores;
    }

    public function orderScores($scores)
    {
        $sorted = $scores->sortBy([
            ['total', 'desc'],
            ['participant.semi_final_order', 'asc'],
        ]);

        return $sorted;
    }
}
