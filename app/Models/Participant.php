<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Participant extends Model
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'year',
        'song',
        'semi_final',
        'final',
    ];
    
    /**
     * Country relationship
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
