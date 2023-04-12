<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('scores')->insert(
            [
                [
                    "user_id" => 1,
                    "participant_id" => 1,
                    "performance" => 6.5,
                    "song" => 7,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 2,
                    "performance" => 4.5,
                    "song" => 6,
                    "total" => 5.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 3,
                    "performance" => 7.5,
                    "song" => 5,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 4,
                    "performance" => 6.5,
                    "song" => 5,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 5,
                    "performance" => 5,
                    "song" => 4,
                    "total" => 4.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 6,
                    "performance" => 6,
                    "song" => 7,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 7,
                    "performance" => 8,
                    "song" => 5,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 8,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 9,
                    "performance" => 5,
                    "song" => 6,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 10,
                    "performance" => 7,
                    "song" => 5,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 11,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 12,
                    "performance" => 6.5,
                    "song" => 7,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 13,
                    "performance" => 6,
                    "song" => 5,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 14,
                    "performance" => 7,
                    "song" => 7,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 15,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 16,
                    "performance" => 6.5,
                    "song" => 6.5,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 17,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 18,
                    "performance" => 6,
                    "song" => 5,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 19,
                    "performance" => 7,
                    "song" => 5.5,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 20,
                    "performance" => 6.5,
                    "song" => 6.5,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 21,
                    "performance" => 5.5,
                    "song" => 6.5,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 22,
                    "performance" => 3,
                    "song" => 4,
                    "total" => 3.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 23,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 24,
                    "performance" => 7,
                    "song" => 8,
                    "total" => 7.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 25,
                    "performance" => 3,
                    "song" => 4,
                    "total" => 3.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 26,
                    "performance" => 3,
                    "song" => 3,
                    "total" => 3
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 27,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 28,
                    "performance" => 8,
                    "song" => 7,
                    "total" => 7.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 29,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 30,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 31,
                    "performance" => 6,
                    "song" => 5,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 32,
                    "performance" => 7,
                    "song" => 7,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 33,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 34,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 35,
                    "performance" => 3,
                    "song" => 3,
                    "total" => 3
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 36,
                    "performance" => 8,
                    "song" => 7,
                    "total" => 7.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 37,
                    "performance" => 8,
                    "song" => 7,
                    "total" => 7.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 38,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 39,
                    "performance" => 5,
                    "song" => 6,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 40,
                    "performance" => 6.5,
                    "song" => 5,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 41,
                    "performance" => 6.5,
                    "song" => 7,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 42,
                    "performance" => 5,
                    "song" => 5,
                    "total" => 5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 43,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 44,
                    "performance" => 6.5,
                    "song" => 6,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 45,
                    "performance" => 6.5,
                    "song" => 7.5,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 46,
                    "performance" => 6.5,
                    "song" => 6,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 47,
                    "performance" => 8,
                    "song" => 8,
                    "total" => 8
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 48,
                    "performance" => 7,
                    "song" => 7,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 49,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 50,
                    "performance" => 5.5,
                    "song" => 6,
                    "total" => 5.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 51,
                    "performance" => 6,
                    "song" => 5,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 52,
                    "performance" => 5,
                    "song" => 4,
                    "total" => 4.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 53,
                    "performance" => 4,
                    "song" => 5,
                    "total" => 4.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 54,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 55,
                    "performance" => 6.5,
                    "song" => 6,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 56,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 57,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 58,
                    "performance" => 4,
                    "song" => 5,
                    "total" => 4.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 59,
                    "performance" => 7.5,
                    "song" => 6.5,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 60,
                    "performance" => 7.5,
                    "song" => 7,
                    "total" => 7.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 61,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 62,
                    "performance" => 6,
                    "song" => 4,
                    "total" => 5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 63,
                    "performance" => 5,
                    "song" => 5.5,
                    "total" => 5.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 64,
                    "performance" => 6,
                    "song" => 7,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 65,
                    "performance" => 5,
                    "song" => 3,
                    "total" => 4
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 66,
                    "performance" => 5.5,
                    "song" => 5.5,
                    "total" => 5.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 67,
                    "performance" => 5,
                    "song" => 5,
                    "total" => 5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 68,
                    "performance" => 6.5,
                    "song" => 6.5,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 69,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 70,
                    "performance" => 6.5,
                    "song" => 7.5,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 71,
                    "performance" => 5.5,
                    "song" => 6.5,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 72,
                    "performance" => 6.5,
                    "song" => 6.5,
                    "total" => 6.5
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 73,
                    "performance" => 7,
                    "song" => 7,
                    "total" => 7
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 74,
                    "performance" => 6.5,
                    "song" => 6,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 75,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 76,
                    "performance" => 6,
                    "song" => 6.5,
                    "total" => 6.25
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 77,
                    "performance" => 6,
                    "song" => 6,
                    "total" => 6
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 78,
                    "performance" => 7,
                    "song" => 6.5,
                    "total" => 6.75
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 79,
                    "performance" => 8,
                    "song" => 8,
                    "total" => 8
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 80,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 81,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 82,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 83,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 84,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 85,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 86,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 87,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 88,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 89,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 90,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 91,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 92,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 93,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 1,
                    "participant_id" => 94,
                    "performance" => 0,
                    "song" => 0,
                    "total" => 0
                ],
                [
                    "user_id" => 2,
                    "participant_id" => 94,
                    "performance" => 5,
                    "song" => 7,
                    "total" => 5
                ]
            ]
        );
    }
}
