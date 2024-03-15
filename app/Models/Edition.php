<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Edition extends Model
{
    use CrudTrait;
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'year',
        'city',
        'country_id',
        'semi_final_1_date',
        'semi_final_2_date',
        'final_date',
    ];

    /**
     * Country relationship
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Scores relationship
     */
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    /**
     * This method redirects the user to the most recent edition
     * of the Eurovision Song Contest.
     */
    public static function getCurrentStage()
    {
        $year = 2024; # Current year
        $startDate = '03-01'; // Date to start showing the year

        $currentDate = new DateTime(); // Get the current date

        // Mock date for testing
        // $currentDate = DateTime::createFromFormat('Y-m-d\TH:i:s', "2024-05-10T21:01:00");

        // Check if it's before March 1st or not, and return the year

        $edition = self::where('year', $year)->first();

        // Get the dates for semi-final 1 and semi-final 2
        $semiFinal1Date = $edition->semi_final_1_date ? DateTime::createFromFormat(env('DATE_FORMAT'), $edition->semi_final_1_date) : DateTime::createFromFormat('Y-m-d', "$year-05-07")->setTime(0, 0, 0);
        $semiFinal2Date = $edition->semi_final_2_date ? DateTime::createFromFormat(env('DATE_FORMAT'), $edition->semi_final_2_date) : DateTime::createFromFormat('Y-m-d', "$year-05-09")->setTime(0, 0, 0);
        
        $semiFinal1Date->modify('+1 day');
        $semiFinal2Date->modify('+1 day');

        // Check which stage is the next upcoming stage
        if ($currentDate <= $semiFinal1Date) {
            // Next upcoming stage is Semi-Final 1
            return ['route' => 'semi-final.index', 'year' => $year, 'stage' => 1];
        } elseif ($currentDate <= $semiFinal2Date) {
            // Next upcoming stage is Semi-Final 2
            return ['route' => 'semi-final.index', 'year' => $year, 'stage' => 2];
        } else {
            // Next upcoming stage is Final
            return ['route' => 'final.index', 'year' => $year];
        }
    }
}
