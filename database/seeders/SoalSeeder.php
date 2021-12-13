<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bio11_soals')->insert([
            'question' => 'Which is true?',
            'answer_correct' => 'Adalah benar',
            'answer_1' => "False",
            'answer_2' => "Tidak",
            'answer_3' => "Gak",
            'answer_4' => "No"
        ]);
    }
}
