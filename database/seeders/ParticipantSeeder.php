<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participants')->insert(
            [
                [
                    "year" => 2021,
                    "song" => "Discoteque",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 21
                ],
                [
                    "year" => 2021,
                    "song" => "Amen",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 36
                ],
                [
                    "year" => 2021,
                    "song" => "Russian woman",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 33
                ],
                [
                    "year" => 2021,
                    "song" => "Voices",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 40
                ],
                [
                    "year" => 2021,
                    "song" => "Technicolour",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 3
                ],
                [
                    "year" => 2021,
                    "song" => "Here I stand",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 26
                ],
                [
                    "year" => 2021,
                    "song" => "MAPS",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "year" => 2021,
                    "song" => "El Diablo",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 7
                ],
                [
                    "year" => 2021,
                    "song" => "Fallen angel",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 27
                ],
                [
                    "year" => 2021,
                    "song" => "Tick-tock",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "year" => 2021,
                    "song" => "The wrong place",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 5
                ],
                [
                    "year" => 2021,
                    "song" => "Set me free",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 17
                ],
                [
                    "year" => 2021,
                    "song" => "Amnesia",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 32
                ],
                [
                    "year" => 2021,
                    "song" => "Mata Hari",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 4
                ],
                [
                    "year" => 2021,
                    "song" => "Sjoem",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 28
                ],
                [
                    "year" => 2021,
                    "song" => "Je me casse",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 22
                ],
                [
                    "year" => 2021,
                    "song" => "Adrenalina",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 34
                ],
                [
                    "year" => 2021,
                    "song" => "The lucky one",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 10
                ],
                [
                    "year" => 2021,
                    "song" => "Omaga",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 38
                ],
                [
                    "year" => 2021,
                    "song" => "Last dance",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 14
                ],
                [
                    "year" => 2021,
                    "song" => "Amen",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 29
                ],
                [
                    "year" => 2021,
                    "song" => "The ride",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 30
                ],
                [
                    "year" => 2021,
                    "song" => "SUGAR",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 23
                ],
                [
                    "year" => 2021,
                    "song" => "10 years",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 16
                ],
                [
                    "year" => 2021,
                    "song" => "Loco loco",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 35
                ],
                [
                    "year" => 2021,
                    "song" => "You",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 13
                ],
                [
                    "year" => 2021,
                    "song" => "Karma",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 1
                ],
                [
                    "year" => 2021,
                    "song" => "Love is on my side",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 31
                ],
                [
                    "year" => 2021,
                    "song" => "Growing up is getting old",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 6
                ],
                [
                    "year" => 2021,
                    "song" => "Dark side",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 11
                ],
                [
                    "year" => 2021,
                    "song" => "The Moon is rising",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "year" => 2021,
                    "song" => "Tout l'Univers",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 41
                ],
                [
                    "year" => 2021,
                    "song" => "Øve os på hinanden",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 8
                ],
                [
                    "year" => 2021,
                    "song" => "Birth of a new age",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 25
                ],
                [
                    "year" => 2021,
                    "song" => "I don't feel hate",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 9
                ],
                [
                    "year" => 2021,
                    "song" => "Voilà",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 12
                ],
                [
                    "year" => 2021,
                    "song" => "Zitti e buoni",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 18
                ],
                [
                    "year" => 2021,
                    "song" => "Voy a quedarme",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 37
                ],
                [
                    "year" => 2021,
                    "song" => "Embers",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 39
                ],
                [
                    "year" => 2022,
                    "song" => "Sekret",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 1
                ],
                [
                    "year" => 2022,
                    "song" => "Eat Your Salad",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "year" => 2022,
                    "song" => "Sentimental",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 21
                ],
                [
                    "year" => 2022,
                    "song" => "Boys Do Cry",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 41
                ],
                [
                    "year" => 2022,
                    "song" => "Disko",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 36
                ],
                [
                    "year" => 2022,
                    "song" => "Stefania",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 28
                ],
                [
                    "year" => 2022,
                    "song" => "Intention",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 6
                ],
                [
                    "year" => 2022,
                    "song" => "De diepte",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 25
                ],
                [
                    "year" => 2022,
                    "song" => "Trenulețul",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 23
                ],
                [
                    "year" => 2022,
                    "song" => "Saudade, saudade",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 31
                ],
                [
                    "year" => 2022,
                    "song" => "Guilty Pleasure",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "year" => 2022,
                    "song" => "The Show",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 8
                ],
                [
                    "year" => 2022,
                    "song" => "Halo",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 29
                ],
                [
                    "year" => 2022,
                    "song" => "Með hækkandi sól",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 16
                ],
                [
                    "year" => 2022,
                    "song" => "Die Together",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 14
                ],
                [
                    "year" => 2022,
                    "song" => "Give That Wolf a Banana",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 27
                ],
                [
                    "year" => 2022,
                    "song" => "Snap",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 2
                ],
                [
                    "year" => 2022,
                    "song" => "Jezebel",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 11
                ],
                [
                    "year" => 2022,
                    "song" => "I.M",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 17
                ],
                [
                    "year" => 2022,
                    "song" => "In corpore sano",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 35
                ],
                [
                    "year" => 2022,
                    "song" => "Fade to Black",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 4
                ],
                [
                    "year" => 2022,
                    "song" => "Lock Me In",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 13
                ],
                [
                    "year" => 2022,
                    "song" => "I Am What I Am",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 22
                ],
                [
                    "year" => 2022,
                    "song" => "Stripper",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 34
                ],
                [
                    "year" => 2022,
                    "song" => "Not the Same",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 3
                ],
                [
                    "year" => 2022,
                    "song" => "Ela",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 7
                ],
                [
                    "year" => 2022,
                    "song" => "That's Rich",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "year" => 2022,
                    "song" => "Circles",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 26
                ],
                [
                    "year" => 2022,
                    "song" => "Hope",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 10
                ],
                [
                    "year" => 2022,
                    "song" => "Llámame",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 32
                ],
                [
                    "year" => 2022,
                    "song" => "River",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 30
                ],
                [
                    "year" => 2022,
                    "song" => "Breathe",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 24
                ],
                [
                    "year" => 2022,
                    "song" => "Miss You",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 5
                ],
                [
                    "year" => 2022,
                    "song" => "Hold Me Closer",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 40
                ],
                [
                    "year" => 2022,
                    "song" => "Lights Off",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 38
                ],
                [
                    "year" => 2022,
                    "song" => "Brividi",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 18
                ],
                [
                    "year" => 2022,
                    "song" => "Fulenn",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 12
                ],
                [
                    "year" => 2022,
                    "song" => "Rockstars",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 9
                ],
                [
                    "year" => 2022,
                    "song" => "SloMo",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 37
                ],
                [
                    "year" => 2022,
                    "song" => "Space Man",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 1
                ],
                [
                    "year" => 2023,
                    "song" => "Queen of Kings",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 27
                ],
                [
                    "year" => 2023,
                    "song" => "Dance (Our Own Party)",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 22
                ],
                [
                    "year" => 2023,
                    "song" => "Samo mi se spava",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 35
                ],
                [
                    "year" => 2023,
                    "song" => "Aijā",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "year" => 2023,
                    "song" => "Ai coração",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 31
                ],
                [
                    "year" => 2023,
                    "song" => "We Are One",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "year" => 2023,
                    "song" => "Mama ŠČ!",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "year" => 2023,
                    "song" => "Watergun",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 41
                ],
                [
                    "year" => 2023,
                    "song" => "Unicorn",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 17
                ],
                [
                    "year" => 2023,
                    "song" => "Soarele și luna",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 23
                ],
                [
                    "year" => 2023,
                    "song" => "Tattoo",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 40
                ],
                [
                    "year" => 2023,
                    "song" => "Tell Me More",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 4
                ],
                [
                    "year" => 2023,
                    "song" => "My Sister's Crown",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 38
                ],
                [
                    "year" => 2023,
                    "song" => "Burning Daylight",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 25
                ],
                [
                    "year" => 2023,
                    "song" => "Cha Cha Cha",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 11
                ]
            ]
        );
    }
}
