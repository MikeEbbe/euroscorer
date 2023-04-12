<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FinalController extends Controller
{
    /**
     * Returns a final view by its year
     */
    public function index($year)
    {
        $rules = [
            'year' => [
                'required',
                'exists:editions,year'
            ]
        ];

        $validator = Validator::make(['year' => $year], $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $scores = $this->finalScoresByUserAndYear($user, $year);

        return view('home.final', compact('scores', 'year'));
    }

    /**
     * Loads all scores in the final for a user by their given year,
     * sorted by the assigned user score.
     */
    public function finalScoresByUserAndYear($user, $year)
    {
        $scores = $user->scores()->with('participant')->whereHas('participant', function ($query) use ($year) {
            $query->where('is_in_final', true)->whereHas('edition', function ($query) use ($year) {
                $query->where('year', $year);
            });
        })->orderByDesc('total')->get();
        // $participants = Participant::select('participants.*')
        //     ->leftJoin('scores', function ($join) use ($userId) {
        //         $join->on('participants.id', '=', 'scores.participant_id')
        //             ->where('scores.user_id', '=', $userId);
        //     })
        //     ->whereHas('edition', function ($query) use ($year) {
        //         $query->where('year', $year);
        //     })->where('is_in_final', true)
        //     ->orderByDesc('scores.total')
        //     ->orderBy('final_order')
        //     ->get();

        return $scores;
    }
}
