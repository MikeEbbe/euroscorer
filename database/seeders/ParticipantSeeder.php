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
                    "edition_id" => 1,
                    "song" => "Discoteque",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 21
                ],
                [
                    "edition_id" => 1,
                    "song" => "Amen",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 36
                ],
                [
                    "edition_id" => 1,
                    "song" => "Russian woman",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 33
                ],
                [
                    "edition_id" => 1,
                    "song" => "Voices",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 40
                ],
                [
                    "edition_id" => 1,
                    "song" => "Technicolour",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 3
                ],
                [
                    "edition_id" => 1,
                    "song" => "Here I stand",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 26
                ],
                [
                    "edition_id" => 1,
                    "song" => "MAPS",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "edition_id" => 1,
                    "song" => "El Diablo",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 7
                ],
                [
                    "edition_id" => 1,
                    "song" => "Fallen angel",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 27
                ],
                [
                    "edition_id" => 1,
                    "song" => "Tick-tock",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "edition_id" => 1,
                    "song" => "The wrong place",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 5
                ],
                [
                    "edition_id" => 1,
                    "song" => "Set me free",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 17
                ],
                [
                    "edition_id" => 1,
                    "song" => "Amnesia",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 32
                ],
                [
                    "edition_id" => 1,
                    "song" => "Mata Hari",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 4
                ],
                [
                    "edition_id" => 1,
                    "song" => "Sjoem",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 28
                ],
                [
                    "edition_id" => 1,
                    "song" => "Je me casse",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 22
                ],
                [
                    "edition_id" => 1,
                    "song" => "Adrenalina",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 34
                ],
                [
                    "edition_id" => 1,
                    "song" => "The lucky one",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 10
                ],
                [
                    "edition_id" => 1,
                    "song" => "Omaga",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 38
                ],
                [
                    "edition_id" => 1,
                    "song" => "Last dance",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 14
                ],
                [
                    "edition_id" => 1,
                    "song" => "Amen",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 29
                ],
                [
                    "edition_id" => 1,
                    "song" => "The ride",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 30
                ],
                [
                    "edition_id" => 1,
                    "song" => "SUGAR",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 23
                ],
                [
                    "edition_id" => 1,
                    "song" => "10 edition_ids",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 16
                ],
                [
                    "edition_id" => 1,
                    "song" => "Loco loco",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 35
                ],
                [
                    "edition_id" => 1,
                    "song" => "You",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 13
                ],
                [
                    "edition_id" => 1,
                    "song" => "Karma",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 1
                ],
                [
                    "edition_id" => 1,
                    "song" => "Love is on my side",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 31
                ],
                [
                    "edition_id" => 1,
                    "song" => "Growing up is getting old",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 6
                ],
                [
                    "edition_id" => 1,
                    "song" => "Dark side",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 11
                ],
                [
                    "edition_id" => 1,
                    "song" => "The Moon is rising",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "edition_id" => 1,
                    "song" => "Tout l'Univers",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 41
                ],
                [
                    "edition_id" => 1,
                    "song" => "Øve os på hinanden",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 8
                ],
                [
                    "edition_id" => 1,
                    "song" => "Birth of a new age",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 25
                ],
                [
                    "edition_id" => 1,
                    "song" => "I don't feel hate",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 9
                ],
                [
                    "edition_id" => 1,
                    "song" => "Voilà",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 12
                ],
                [
                    "edition_id" => 1,
                    "song" => "Zitti e buoni",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 18
                ],
                [
                    "edition_id" => 1,
                    "song" => "Voy a quedarme",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 37
                ],
                [
                    "edition_id" => 1,
                    "song" => "Embers",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 39
                ],
                [
                    "edition_id" => 2,
                    "song" => "Sekret",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 1
                ],
                [
                    "edition_id" => 2,
                    "song" => "Eat Your Salad",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "edition_id" => 2,
                    "song" => "Sentimental",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 21
                ],
                [
                    "edition_id" => 2,
                    "song" => "Boys Do Cry",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 41
                ],
                [
                    "edition_id" => 2,
                    "song" => "Disko",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 36
                ],
                [
                    "edition_id" => 2,
                    "song" => "Stefania",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 28
                ],
                [
                    "edition_id" => 2,
                    "song" => "Intention",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 6
                ],
                [
                    "edition_id" => 2,
                    "song" => "De diepte",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 25
                ],
                [
                    "edition_id" => 2,
                    "song" => "Trenulețul",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 23
                ],
                [
                    "edition_id" => 2,
                    "song" => "Saudade, saudade",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 31
                ],
                [
                    "edition_id" => 2,
                    "song" => "Guilty Pleasure",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "edition_id" => 2,
                    "song" => "The Show",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 8
                ],
                [
                    "edition_id" => 2,
                    "song" => "Halo",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 29
                ],
                [
                    "edition_id" => 2,
                    "song" => "Með hækkandi sól",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 16
                ],
                [
                    "edition_id" => 2,
                    "song" => "Die Together",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 14
                ],
                [
                    "edition_id" => 2,
                    "song" => "Give That Wolf a Banana",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 27
                ],
                [
                    "edition_id" => 2,
                    "song" => "Snap",
                    "semi_final" => 1,
                    "final" => true,
                    "country_id" => 2
                ],
                [
                    "edition_id" => 2,
                    "song" => "Jezebel",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 11
                ],
                [
                    "edition_id" => 2,
                    "song" => "I.M",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 17
                ],
                [
                    "edition_id" => 2,
                    "song" => "In corpore sano",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 35
                ],
                [
                    "edition_id" => 2,
                    "song" => "Fade to Black",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 4
                ],
                [
                    "edition_id" => 2,
                    "song" => "Lock Me In",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 13
                ],
                [
                    "edition_id" => 2,
                    "song" => "I Am What I Am",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 22
                ],
                [
                    "edition_id" => 2,
                    "song" => "Stripper",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 34
                ],
                [
                    "edition_id" => 2,
                    "song" => "Not the Same",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 3
                ],
                [
                    "edition_id" => 2,
                    "song" => "Ela",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 7
                ],
                [
                    "edition_id" => 2,
                    "song" => "That's Rich",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "edition_id" => 2,
                    "song" => "Circles",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 26
                ],
                [
                    "edition_id" => 2,
                    "song" => "Hope",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 10
                ],
                [
                    "edition_id" => 2,
                    "song" => "Llámame",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 32
                ],
                [
                    "edition_id" => 2,
                    "song" => "River",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 30
                ],
                [
                    "edition_id" => 2,
                    "song" => "Breathe",
                    "semi_final" => 2,
                    "final" => false,
                    "country_id" => 24
                ],
                [
                    "edition_id" => 2,
                    "song" => "Miss You",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 5
                ],
                [
                    "edition_id" => 2,
                    "song" => "Hold Me Closer",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 40
                ],
                [
                    "edition_id" => 2,
                    "song" => "Lights Off",
                    "semi_final" => 2,
                    "final" => true,
                    "country_id" => 38
                ],
                [
                    "edition_id" => 2,
                    "song" => "Brividi",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 18
                ],
                [
                    "edition_id" => 2,
                    "song" => "Fulenn",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 12
                ],
                [
                    "edition_id" => 2,
                    "song" => "Rockstars",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 9
                ],
                [
                    "edition_id" => 2,
                    "song" => "SloMo",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 37
                ],
                [
                    "edition_id" => 2,
                    "song" => "Space Man",
                    "semi_final" => null,
                    "final" => true,
                    "country_id" => 1
                ],
                [
                    "edition_id" => 3,
                    "song" => "Queen of Kings",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 27
                ],
                [
                    "edition_id" => 3,
                    "song" => "Dance (Our Own Party)",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 22
                ],
                [
                    "edition_id" => 3,
                    "song" => "Samo mi se spava",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 35
                ],
                [
                    "edition_id" => 3,
                    "song" => "Aijā",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 20
                ],
                [
                    "edition_id" => 3,
                    "song" => "Ai coração",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 31
                ],
                [
                    "edition_id" => 3,
                    "song" => "We Are One",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 15
                ],
                [
                    "edition_id" => 3,
                    "song" => "Mama ŠČ!",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 19
                ],
                [
                    "edition_id" => 3,
                    "song" => "Watergun",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 41
                ],
                [
                    "edition_id" => 3,
                    "song" => "Unicorn",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 17
                ],
                [
                    "edition_id" => 3,
                    "song" => "Soarele și luna",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 23
                ],
                [
                    "edition_id" => 3,
                    "song" => "Tattoo",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 40
                ],
                [
                    "edition_id" => 3,
                    "song" => "Tell Me More",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 4
                ],
                [
                    "edition_id" => 3,
                    "song" => "My Sister's Crown",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 38
                ],
                [
                    "edition_id" => 3,
                    "song" => "Burning Daylight",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 25
                ],
                [
                    "edition_id" => 3,
                    "song" => "Cha Cha Cha",
                    "semi_final" => 1,
                    "final" => false,
                    "country_id" => 11
                ]
            ]
        );
    }
}
