<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('editions')->insert(
            [
                [
                    "year" => 2021,
                    "city" => 'Rotterdam',
                    "logo" => ''
                ],
                [
                    "year" => 2022,
                    "city" => 'Turijn',
                    "logo" => ''
                ],
                [
                    "year" => 2023,
                    "city" => 'Liverpool',
                    "logo" => ''
                ],
            ]
        );
    }
}
