<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ScoreController extends Controller
{
    /**
     * This method returns the score edit index
     * @param int $year - The year of the score
     * @param int $id - The id of the score
     */
    public function index($year, $id)
    {
        $rules = [
            'year' => [
                'required',
                'exists:editions,year'
            ],
            'id' => [
                'required',
                Rule::exists('scores', 'id')->where(function ($query) {
                    $query->where('user_id', Auth::id()); // Score must belong to the authenticated user
                })
            ]
        ];

        $validator = Validator::make(['year' => $year, 'id' => $id], $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (url()->previous() != session('original_url')) {
            // Set the original URL
            session(['original_url' => url()->previous()]);
        }
        // Get the stored url from session
        $redirect_url = session('original_url');
        if (strpos($redirect_url, '/semi-final') === false && strpos($redirect_url, '/final') === false) {
            // Set the redirect url to a new URL that redirects to the final page for a specific year
            $redirect_url = '/' . $year . '/final';
        }

        // Scores of authenticated user
        $scores = Auth::user()->scores;
        $score = $scores->firstWhere('id', $id);

        // Return the score view with the score
        return view('home.edit_score', compact('score', 'year', 'id', 'redirect_url'));
    }

    /**
     * This method updates the score of a participant for a user
     * @param request $request - The request data containing the new scores
     * @param int $year - The year of the score
     * @param int $id - The id of the score
     */
    public function update(Request $request, $year, $id)
    {
        $rules = [
            'year' => [
                'required',
                'exists:editions,year'
            ],
            'id' => [
                'required',
                Rule::exists('scores', 'id')->where(function ($query) {
                    $query->where('user_id', Auth::id());
                })
            ],
            'performance' => [
                'required',
                'numeric',
                'between:0,10',
            ],
            'song' => [
                'required',
                'numeric',
                'between:0,10',
            ]
        ];

        $request->merge([
            'year' => $year,
            'id' => $id
        ]);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $performanceScore = $request->performance;
        $songScore = $request->song;
        $totalScore = ($performanceScore + $songScore) / 2; // Average of the two scores

        // Save score for user
        $score = Score::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $score->performance = $performanceScore;
        $score->song = $songScore;
        $score->total = $totalScore;
        $score->save();

        return redirect(session('original_url')); // Redirect to original URL
    }
}
