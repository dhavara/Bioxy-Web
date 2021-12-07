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
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '2', // User
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '3', // User
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '4', // User
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '5', // User
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bio11_users_details')->insert([
            'user_id' => '6', // User
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
