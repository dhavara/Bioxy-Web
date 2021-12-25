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
        DB::table('bio11_titles')->insert([
            'title' => 'Ilmuwan Biologi',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Serba Tahu',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Si Paling Nilai Seratus',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Si Jagoan',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Si Terampil',
            'price' => '1000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Dewa Biologi',
            'price' => '10000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Albert Einstein Jr.',
            'price' => '5000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Titisan Charles Darwin',
            'price' => '5000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Cucu Carolus Linnaeus',
            'price' => '5000'
        ]);
        DB::table('bio11_titles')->insert([
            'title' => 'Keturunan Gregor Mendel',
            'price' => '5000'
        ]);

        // Frames
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Merah',
            'image_path' => 'bingkai_dasar_merah.png',
            'price' => '1000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Biru',
            'image_path' => 'bingkai_dasar_biru.png',
            'price' => '1000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Ungu',
            'image_path' => 'bingkai_dasar_ungu.png',
            'price' => '1000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Kuning',
            'image_path' => 'bingkai_dasar_kuning.png',
            'price' => '1000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Hijau',
            'image_path' => 'bingkai_dasar_hijau.png',
            'price' => '1000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Emas Mewah',
            'image_path' => 'emas_mewah.png',
            'price' => '2000'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Windows XP Paint',
            'image_path' => 'paint_winxp.png',
            'price' => '1500'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Batu Bata',
            'image_path' => 'batu_bata.png',
            'price' => '1500'
        ]);
        DB::table('bio11_frames')->insert([
            'name' => 'Bingkai Foto',
            'image_path' => 'bingkai_foto.png',
            'price' => '1500'
        ]);
        

        //Colors
        // DB::table('bio11_colors')->insert([
        //     'name' => 'Default',
        //     'hex_code' => '',
        //     'price' => '0'
        // ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Biru Nonahiya', // 1
            'hex_code' => '#00AFCA',
            'price' => '0'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Ungu Luam', // 2
            'hex_code' => '#C660CE',
            'price' => '0'
        ]);
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
            'name' => 'Jingga',
            'hex_code' => 'orange',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Merah Muda',
            'hex_code' => 'pink',
            'price' => '1000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Salmon',
            'hex_code' => '#FA8072',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Hijau Neon',
            'hex_code' => '#39FF14',
            'price' => '2000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Magenta',
            'hex_code' => 'magenta',
            'price' => '2000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Cyan',
            'hex_code' => 'cyan',
            'price' => '2000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Gold',
            'hex_code' => '#FFD700',
            'price' => '2000'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Lime',
            'hex_code' => '#BFFF00',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Maroon',
            'hex_code' => '#800000',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Lavender',
            'hex_code' => '#E6E6FA',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Turquoise',
            'hex_code' => '#30D5C8',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Permen Mint',
            'hex_code' => '#AAF0D1',
            'price' => '1500'
        ]);
        DB::table('bio11_colors')->insert([
            'name' => 'Biru Dongker',
            'hex_code' => '#000080',
            'price' => '1500'
        ]);
    }
}
