<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Participant extends Model
{
    use CrudTrait;
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'edition_id',
        'country_id',
        'song',
        'semi_final',
        'is_in_final',
        'semi_final_order',
        'final_order',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($participant) {
            // Add a score entry for this participant and add it to all users
            $users = User::all();

            foreach ($users as $user) {
                $scoreExists = $participant->scores()
                    ->where('user_id', $user->id)
                    ->exists();
        
                if (!$scoreExists) {
                    $score = new Score([
                        'user_id' => $user->id,
                    ]);
                    $participant->scores()->save($score);
                }
            }
        });
    }

    /**
     * Edition relationship
     */
    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

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
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
