<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('countries')->truncate();
        
        DB::table('countries')->insert(
            [
                [
                    "name" => "Albanië",
                    "flag" => "https://flagcdn.com/h120/al.png"
                ],
                [
                    "name" => "Armenië",
                    "flag" => "https://flagcdn.com/h120/am.png"
                ],
                [
                    "name" => "Australië",
                    "flag" => "https://flagcdn.com/h120/au.png"
                ],
                [
                    "name" => "Azerbeidzjan",
                    "flag" => "https://flagcdn.com/h120/az.png"
                ],
                [
                    "name" => "België",
                    "flag" => "https://flagcdn.com/h120/be.png"
                ],
                [
                    "name" => "Bulgarije",
                    "flag" => "https://flagcdn.com/h120/bg.png"
                ],
                [
                    "name" => "Cyprus",
                    "flag" => "https://flagcdn.com/h120/cy.png"
                ],
                [
                    "name" => "Denemarken",
                    "flag" => "https://flagcdn.com/h120/dk.png"
                ],
                [
                    "name" => "Duitsland",
                    "flag" => "https://flagcdn.com/h120/de.png"
                ],
                [
                    "name" => "Estland",
                    "flag" => "https://flagcdn.com/h120/ee.png"
                ],
                [
                    "name" => "Finland",
                    "flag" => "https://flagcdn.com/h120/fi.png"
                ],
                [
                    "name" => "Frankrijk",
                    "flag" => "https://flagcdn.com/h120/fr.png"
                ],
                [
                    "name" => "Georgië",
                    "flag" => "https://flagcdn.com/h120/ge.png"
                ],
                [
                    "name" => "Griekenland",
                    "flag" => "https://flagcdn.com/h120/gr.png"
                ],
                [
                    "name" => "Ierland",
                    "flag" => "https://flagcdn.com/h120/ie.png"
                ],
                [
                    "name" => "Ijsland",
                    "flag" => "https://flagcdn.com/h120/is.png"
                ],
                [
                    "name" => "Israël",
                    "flag" => "https://flagcdn.com/h120/il.png"
                ],
                [
                    "name" => "Italië",
                    "flag" => "https://flagcdn.com/h120/it.png"
                ],
                [
                    "name" => "Kroatië",
                    "flag" => "https://flagcdn.com/h120/hr.png"
                ],
                [
                    "name" => "Letland",
                    "flag" => "https://flagcdn.com/h120/lv.png"
                ],
                [
                    "name" => "Litouwen",
                    "flag" => "https://flagcdn.com/h120/lt.png"
                ],
                [
                    "name" => "Malta",
                    "flag" => "https://flagcdn.com/h120/mt.png"
                ],
                [
                    "name" => "Moldavië",
                    "flag" => "https://flagcdn.com/h120/md.png"
                ],
                [
                    "name" => "Montenegro",
                    "flag" => "https://flagcdn.com/h120/me.png"
                ],
                [
                    "name" => "Nederland",
                    "flag" => "https://flagcdn.com/h120/nl.png"
                ],
                [
                    "name" => "Noord-Macedonië",
                    "flag" => "https://flagcdn.com/h120/mk.png"
                ],
                [
                    "name" => "Noorwegen",
                    "flag" => "https://flagcdn.com/h120/no.png"
                ],
                [
                    "name" => "Oekraïne",
                    "flag" => "https://flagcdn.com/h120/ua.png"
                ],
                [
                    "name" => "Oostenrijk",
                    "flag" => "https://flagcdn.com/h120/at.png"
                ],
                [
                    "name" => "Polen",
                    "flag" => "https://flagcdn.com/h120/pl.png"
                ],
                [
                    "name" => "Portugal",
                    "flag" => "https://flagcdn.com/h120/pt.png"
                ],
                [
                    "name" => "Roemenië",
                    "flag" => "https://flagcdn.com/h120/ro.png"
                ],
                [
                    "name" => "Rusland",
                    "flag" => "https://flagcdn.com/h120/ru.png"
                ],
                [
                    "name" => "San Marino",
                    "flag" => "https://flagcdn.com/h120/sm.png"
                ],
                [
                    "name" => "Servië",
                    "flag" => "https://flagcdn.com/h120/rs.png"
                ],
                [
                    "name" => "Slovenië",
                    "flag" => "https://flagcdn.com/h120/si.png"
                ],
                [
                    "name" => "Spanje",
                    "flag" => "https://flagcdn.com/h120/es.png"
                ],
                [
                    "name" => "Tsjechië",
                    "flag" => "https://flagcdn.com/h120/cz.png"
                ],
                [
                    "name" => "Verenigd Koninkrijk",
                    "flag" => "https://flagcdn.com/h120/gb.png"
                ],
                [
                    "name" => "Zweden",
                    "flag" => "https://flagcdn.com/h120/se.png"
                ],
                [
                    "name" => "Zwitserland",
                    "flag" => "https://flagcdn.com/h120/ch.png"
                ]
            ]
        );
        Schema::enableForeignKeyConstraints();
    }
}
