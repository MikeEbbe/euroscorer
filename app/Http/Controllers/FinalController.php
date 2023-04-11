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

        $participants = $this->participantsInFinal($year);
        return view('home.final', compact('participants'));
    }

    /**
     * Returns the participants in a final by their year
     */
    public function participantsInFinal($year)
    {
        $userId = Auth::id();
        $participants = $this->finalParticipantsByUserAndYear($userId, $year);
        return $participants;
    }

    /**
     * Loads all participants in the final by their given year,
     * along with the user's scores assigned to them.
     */
    public function finalParticipantsByUserAndYear($userId, $year)
    {
        $participants = Participant::whereHas('edition', function ($query) use ($year) {
            $query->where('year', $year);
        })->where('is_in_final', true)
            ->with(['scores' => function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }])
            ->orderBy('final_order')
            ->get();

        return $participants;
    }
}
