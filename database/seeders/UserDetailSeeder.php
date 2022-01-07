<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bio11_users_details')->insert([
            'user_id' => '1', // Admin
            'user_title' => '2',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '2', // User
            'user_title' => '1',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '3', // User
            'user_title' => '2',
            'user_color' => '1',
            'user_image' => 'Nonahiya.png',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '4', // User
            'user_title' => '2',
            'user_color' => '2',
            'user_image' => 'Luam.png',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '5', // User
            'user_title' => '2',
            'user_image' => 'Chips.png',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '6', // User
            'user_title' => '2',
            'user_image' => 'Willl.png',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
