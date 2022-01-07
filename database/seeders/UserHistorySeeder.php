<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy Data
        DB::table('bio11_users_histories')->insert([
            'user_id' => '7', // User
            'difficulty' => '4',
            'point' => 90,
            'accuracy' => 81,
            'total_correct' => 9,
            'total_question' => 11,
            'created_at' => strtotime('7 January 2021, 07:12:25'),
        ]);
        DB::table('bio11_users_histories')->insert([
            'user_id' => '7', // User
            'difficulty' => '1',
            'point' => 150,
            'accuracy' => 65,
            'total_correct' => 15,
            'total_question' => 23,
            'created_at' => strtotime('7 January 2021, 07:17:33'),
        ]);
    }
}
