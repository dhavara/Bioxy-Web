<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // NotSpiderman
            // User
        DB::table('bio11_users')->insert([
            'username' => 'NotSpiderman',
            'name' => 'Peter Parker',
            'email' => 'peterparker@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Midtown High School',
            'city' => 'New York City',
            'birthdate' => strtotime('10 August 2001'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
            // Detail
        DB::table('bio11_users_details')->insert([
            'user_id' => '7', // User
            'user_title' => '1',
            'point' => '600',
            'created_at' => \Carbon\Carbon::now(),
        ]);
            // Titles
        DB::table('bio11_users_titles')->insert([
            'user_id' => '7',
            'title_id' => '1'
        ]);
            // Roles
        DB::table('bio11_users_roles')->insert([
            'user_id' => '7',
            'role_id' => '1',
        ]);
            // Histories
        DB::table('bio11_users_histories')->insert([
            'user_id' => '7', // User
            'difficulty' => '4',
            'point' => '90',
            'accuracy' => '81',
            'total_correct' => '9',
            'total_question' => '11',
            'created_at' => date('Y-d-m H:i:s', strtotime('7 January 2021 07:12:25')),
        ]);
        DB::table('bio11_users_histories')->insert([
            'user_id' => '7', // User
            'difficulty' => '1',
            'point' => '150',
            'accuracy' => '65',
            'total_correct' => '15',
            'total_question' => '23',
            'created_at' => date('Y-d-m H:i:s', strtotime('7 January 2021 07:12:25')),
        ]);
        // NotSpiderman

    }
}
