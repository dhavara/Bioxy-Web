<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bio11_difficulties')->insert([
            'difficulty' => 'Mudah',
            'health' => 5,
        ]);
        DB::table('bio11_difficulties')->insert([
            'difficulty' => 'Sedang',
            'health' => 4,
        ]);
        DB::table('bio11_difficulties')->insert([
            'difficulty' => 'Sulit',
            'health' => 3,
        ]);
        DB::table('bio11_difficulties')->insert([
            'difficulty' => 'Sangat Sulit',
            'health' => 1,
        ]);
    }
}
