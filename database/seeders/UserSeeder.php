<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            [
                "username" => "Mike",
            ],
            [
                "password" => bcrypt(env('MAIN_USER_PASSWORD')),
                "is_admin" => true
            ]
        );

        DB::table('users')->updateOrInsert(
            [
                "username" => "Test",
            ],
            [
                "password" => bcrypt(env('TEST_USER_PASSWORD')),
                "is_admin" => false
            ]
        );
    }
}
