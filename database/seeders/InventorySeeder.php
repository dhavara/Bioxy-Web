<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bio11_users_titles')->insert([
            'user_id' => '1',
            'title_id' => '2'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '2',
            'title_id' => '1'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '3',
            'title_id' => '1'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '3',
            'title_id' => '2'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '4',
            'title_id' => '1'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '4',
            'title_id' => '2'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '5',
            'title_id' => '1'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '5',
            'title_id' => '2'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '6',
            'title_id' => '1'
        ]);
        DB::table('bio11_users_titles')->insert([
            'user_id' => '6',
            'title_id' => '2'
        ]);

        // Frames
        

        //Colors
        DB::table('bio11_users_colors')->insert([
            'user_id' => '3',
            'color_id' => '2'
        ]);
    }
}
