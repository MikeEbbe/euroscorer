<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Models\Participant;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StatsController extends Controller
{
    /**
     * Returns the stats view for a year.
     * @param Int $year - Year of the edition
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

        $edition = Edition::where('year', $year)->first();

        // Stats
        $highestTotals = $this->highestTotalsOnAvg($year);
        $highestSongs = $this->highestSongsOnAvg($year);
        $highestActs = $this->highestActsOnAvg($year);
        $lowestSong = $this->lowestSongOnAvg($year);
        $lowestAct = $this->lowestActOnAvg($year);
        $highestSongActDisparity = $this->highestSongActDisparity($year);
        $highestActSongDisparity = $this->highestActSongDisparity($year);

        return view('home.stats', compact('edition', 'highestTotals', 'highestSongs', 'highestActs', 'lowestSong', 'lowestAct', 'highestSongActDisparity', 'highestActSongDisparity'));
    }

    /**
     * Top 5 participants with the highest average total score of a year.
     * @param Int $year - Year of the edition
     */
    public function highestTotalsOnAvg($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the top 5 participants with the highest average total scores
        $participants = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.total', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.total), 2) AS avg_total')
            ->orderByDesc('avg_total')
            ->take(5)
            ->with('country')
            ->get();

        return $participants;
    }

    /**
     * Top 5 participants with the highest average song score of a year.
     * @param Int $year - Year of the edition
     */
    public function highestSongsOnAvg($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the top 5 participants with the highest average song scores
        $participants = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.song', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.song), 2) AS avg_song')
            ->orderByDesc('avg_song')
            ->take(5)
            ->with('country')
            ->get();

        return $participants;
    }

    /**
     * Top 5 participants with the highest average performance score of a year.
     * @param Int $year - Year of the edition
     */
    public function highestActsOnAvg($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the top 5 participants with the highest average act scores
        $participants = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.performance', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.performance), 2) AS avg_performance')
            ->orderByDesc('avg_performance')
            ->take(5)
            ->with('country')
            ->get();

        return $participants;
    }

    /**
     * Participant with the lowest average song score of a year.
     * @param Int $year - Year of the edition
     */
    public function lowestSongOnAvg($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the participant with the lowest average song score
        $participant = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.song', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.song), 2) AS avg_song')
            ->orderBy('avg_song')
            ->take(1)
            ->with('country')
            ->first();

        return $participant;
    }

    /**
     * Participant with the lowest average performance score of a year.
     * @param Int $year - Year of the edition
     */
    public function lowestActOnAvg($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the participant with the lowest average act score
        $participant = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.performance', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.performance), 2) AS avg_performance')
            ->orderBy('avg_performance')
            ->take(1)
            ->with('country')
            ->first();

        return $participant;
    }

    /**
     * Top 5 participant with the highest difference between
     * song score and performance score of a year.
     * @param Int $year - Year of the edition
     */
    public function highestSongActDisparity($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the top 5 participants with the biggest difference between song and act scores
        $participants = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.total', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.song - scores.performance), 2) AS avg_song_disparity')
            ->orderByDesc('avg_song_disparity')
            ->take(5)
            ->with('country')
            ->get();

        return $participants;
    }

    /**
     * Top 5 participant with the highest difference between
     * performance score and song score of a year.
     * @param Int $year - Year of the edition
     */
    public function highestActSongDisparity($year)
    {
        // Retrieve the edition ID for the given year
        $editionId = Edition::where('year', $year)->value('id');

        // Retrieve the top 5 participants with the biggest difference between act and song scores
        $participants = Participant::join('scores', 'participants.id', '=', 'scores.participant_id')
            ->where('participants.edition_id', $editionId)
            ->where('scores.total', '>', 0)
            ->groupBy('participants.id')
            ->selectRaw('participants.*, ROUND(AVG(scores.performance - scores.song), 2) AS avg_performance_disparity')
            ->orderByDesc('avg_performance_disparity')
            ->take(5)
            ->with('country')
            ->get();

        return $participants;
    }
}
