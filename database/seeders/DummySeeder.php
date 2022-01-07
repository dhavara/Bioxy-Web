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
            'created_at' => date('Y-d-m H:i:s', strtotime('7 January 2021 07:10:25'))
        ]);
            // Detail
        DB::table('bio11_users_details')->insert([
            'user_id' => '7', // User
            'user_title' => '1',
            'user_frame' => '3',
            'user_color' => '5',
            'point' => '600',
            'created_at' => date('Y-d-m H:i:s', strtotime('7 January 2021 07:10:25')),
        ]);
            // Titles
        DB::table('bio11_users_titles')->insert([
            'user_id' => '7',
            'title_id' => '1',
            'created_at' => \Carbon\Carbon::now()
        ]);
            // Colors
        DB::table('bio11_users_colors')->insert([
            'user_id' => '7',
            'color_id' => '3',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users_colors')->insert([
            'user_id' => '7',
            'color_id' => '5',
            'created_at' => \Carbon\Carbon::now()
        ]);
            // Frames
        DB::table('bio11_users_frames')->insert([
            'user_id' => '7',
            'frame_id' => '3',
            'created_at' => \Carbon\Carbon::now()
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
            'created_at' => date('Y-d-m H:i:s', strtotime('7 January 2021 07:32:23')),
        ]);
        
        // NotSpiderman

        // Lunar
            // User
        DB::table('bio11_users')->insert([
            'username' => 'Mulan',
            'name' => 'Liu Yanfei',
            'email' => 'liuyanfei@gmail.com',
            'password' => Hash::make('12345678'),
            'school' => 'Beijing High School',
            'city' => 'Beijing',
            'birthdate' => strtotime('20 September 1999'),
            'created_at' => date('Y-d-m H:i:s', strtotime('8 January 2021 10:09:47')),
            'email_verified_at' => date('Y-d-m H:i:s', strtotime('8 January 2021 10:10:20'))
        ]);
            // Detail
        DB::table('bio11_users_details')->insert([
            'user_id' => '8', // User
            'user_title' => '1',
            'user_color' => '1',
            'point' => '420',
            'created_at' => date('Y-d-m H:i:s', strtotime('8 January 2021 10:09:47')),
        ]);
            // Titles
        DB::table('bio11_users_titles')->insert([
            'user_id' => '8',
            'title_id' => '1'
        ]);
            // Colors
        DB::table('bio11_users_colors')->insert([
            'user_id' => '7',
            'color_id' => '2',
            'created_at' => \Carbon\Carbon::now()
        ]);
            // Frames
        DB::table('bio11_users_frames')->insert([
            'user_id' => '7',
            'frame_id' => '1',
            'created_at' => \Carbon\Carbon::now()
        ]);
            // Roles
        DB::table('bio11_users_roles')->insert([
            'user_id' => '8',
            'role_id' => '1',
        ]);
            // Histories
        DB::table('bio11_users_histories')->insert([
            'user_id' => '8', // User
            'difficulty' => '3',
            'point' => '90', //jumlah benar dikali 10
            'accuracy' => '69', //jumlah benar dibagi jumlah soal
            'total_correct' => '9',
            'total_question' => '13',
            'created_at' => date('Y-d-m H:i:s', strtotime('9 January 2021 14:35:55')),
        ]);
        DB::table('bio11_users_histories')->insert([
            'user_id' => '8', // User
            'difficulty' => '1',
            'point' => '150',
            'accuracy' => '65',
            'total_correct' => '15',
            'total_question' => '23',
            'created_at' => date('Y-d-m H:i:s', strtotime('10 January 2021 08:43:21')),
        ]);
        // Mulan
    }
}
