<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert(
            [
                [
                    "name" => "Albanië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/35px-Flag_of_Albania.svg.png"
                ],
                [
                    "name" => "Armenië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png"
                ],
                [
                    "name" => "Australië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Flag_of_Australia.svg/35px-Flag_of_Australia.svg.png"
                ],
                [
                    "name" => "Azerbeidzjan",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png"
                ],
                [
                    "name" => "België",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_(civil).svg/35px-Flag_of_Belgium_(civil).svg.png"
                ],
                [
                    "name" => "Bulgarije",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/35px-Flag_of_Bulgaria.svg.png"
                ],
                [
                    "name" => "Cyprus",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/35px-Flag_of_Cyprus.svg.png"
                ],
                [
                    "name" => "Denemarken",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/35px-Flag_of_Denmark.svg.png"
                ],
                [
                    "name" => "Duitsland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png"
                ],
                [
                    "name" => "Estland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Flag_of_Estonia.svg/35px-Flag_of_Estonia.svg.png"
                ],
                [
                    "name" => "Finland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/35px-Flag_of_Finland.svg.png"
                ],
                [
                    "name" => "Frankrijk",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png"
                ],
                [
                    "name" => "Georgië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png"
                ],
                [
                    "name" => "Griekenland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/35px-Flag_of_Greece.svg.png"
                ],
                [
                    "name" => "Ierland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/35px-Flag_of_Ireland.svg.png"
                ],
                [
                    "name" => "Ijsland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Iceland.svg/35px-Flag_of_Iceland.svg.png"
                ],
                [
                    "name" => "Israël",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/35px-Flag_of_Israel.svg.png"
                ],
                [
                    "name" => "Italië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png"
                ],
                [
                    "name" => "Kroatië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/35px-Flag_of_Croatia.svg.png"
                ],
                [
                    "name" => "Letland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Latvia.svg/35px-Flag_of_Latvia.svg.png"
                ],
                [
                    "name" => "Litouwen",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Lithuania.svg/35px-Flag_of_Lithuania.svg.png"
                ],
                [
                    "name" => "Malta",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Malta.svg/35px-Flag_of_Malta.svg.png"
                ],
                [
                    "name" => "Moldavië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/35px-Flag_of_Moldova.svg.png"
                ],
                [
                    "name" => "Montenegro",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Montenegro.svg/35px-Flag_of_Montenegro.svg.png"
                ],
                [
                    "name" => "Nederland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/35px-Flag_of_the_Netherlands.svg.png"
                ],
                [
                    "name" => "Noord-Macedonië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_North_Macedonia.svg/35px-Flag_of_North_Macedonia.svg.png"
                ],
                [
                    "name" => "Noorwegen",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Norway.svg/35px-Flag_of_Norway.svg.png"
                ],
                [
                    "name" => "Oekraïne",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/35px-Flag_of_Ukraine.svg.png"
                ],
                [
                    "name" => "Oostenrijk",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/35px-Flag_of_Austria.svg.png"
                ],
                [
                    "name" => "Polen",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/35px-Flag_of_Poland.svg.png"
                ],
                [
                    "name" => "Portugal",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/35px-Flag_of_Portugal.svg.png"
                ],
                [
                    "name" => "Roemenië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/35px-Flag_of_Romania.svg.png"
                ],
                [
                    "name" => "Rusland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png"
                ],
                [
                    "name" => "San Marino",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Flag_of_San_Marino.svg/35px-Flag_of_San_Marino.svg.png"
                ],
                [
                    "name" => "Servië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/35px-Flag_of_Serbia.svg.png"
                ],
                [
                    "name" => "Slovenië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/35px-Flag_of_Slovenia.svg.png"
                ],
                [
                    "name" => "Spanje",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png"
                ],
                [
                    "name" => "Tsjechië",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/35px-Flag_of_the_Czech_Republic.svg.png"
                ],
                [
                    "name" => "Verenigd Konikrijk",
                    "flag" => "https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/35px-Flag_of_the_United_Kingdom.svg.png"
                ],
                [
                    "name" => "Zweden",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Sweden.svg/35px-Flag_of_Sweden.svg.png"
                ],
                [
                    "name" => "Zwitserland",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Switzerland.svg/24px-Flag_of_Switzerland.svg.png"
                ]
            ]
        );
    }
}
