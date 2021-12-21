<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Titles
        DB::table('bio11_titles')->insert([
            'title' => 'Pengguna Biasa',
            'price' => '0'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'OP Warnet',
            'price' => '0'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Si Ambisius',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Si Tekun Belajar',
            'price' => '1000'
        ]);

        // Frames
        // DB::table('bio11_frames')->insert([
        //     'name' => 'Default',
        //     'image_path' => '',
        //     'price' => '0'
        // ]);
        

        //Colors
        // DB::table('bio11_colors')->insert([
        //     'name' => 'Default',
        //     'hex_code' => '',
        //     'price' => '0'
        // ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Merah',
            'hex_code' => 'red',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Biru',
            'hex_code' => 'blue',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Kuning',
            'hex_code' => 'yellow',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Hijau',
            'hex_code' => 'green',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Salmon',
            'hex_code' => '#FA8072',
            'price' => '100'
        ]);
    }
}
