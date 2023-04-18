<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('editions')->truncate();

        DB::table('editions')->insert(
            [
                [
                    "year" => 2021,
                    "city" => 'Rotterdam',
                    "country_id" => 25,
                ],
                [
                    "year" => 2022,
                    "city" => 'Turijn',
                    "country_id" => 18,
                ],
                [
                    "year" => 2023,
                    "city" => 'Liverpool',
                    "country_id" => 28,
                ],
            ]
        );
        Schema::enableForeignKeyConstraints();
    }
}
