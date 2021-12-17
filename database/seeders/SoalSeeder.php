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

        //easy
        DB::table('bio11_soals')->insert([
            'question' => 'Tingkat keanekaragaman hayati yang ditunjukkan oleh gambar di atas adalah ….',
            'answer_correct' => ' Gen',
            'answer_1' => "Jenis",
            'answer_2' => "Ekosistem",
            'answer_3' => "Plasma Nutfah",
            'answer_4' => "Spesies",
            'soal_image' => "gen.jpg"
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Tanaman kentang memiliki nama latin yaitu Solanum tuberosum, sedangkan tanaman tomat memiliki nama latin Solanum lycopersicum. Hal ini berarti tanaman kentang dan tomat memiliki  ….',
            'answer_correct' => 'genus sama,spesies berbeda',
            'answer_1' => "spesies sama, genus berbeda",
            'answer_2' => "genus sama, famili berbeda",
            'answer_3' => "genus berbeda, famili sama",
            'answer_4' => "spesies sama, genus dan famili berbeda"
        ]);

        //hard
        DB::table('bio11_soals')->insert([
            'question' => '1. Proglotid \n
            2. Larva Heksakan \n 
            3. Telur \n 
            4. Sistiserkus \n 
            5. Cacing pita dewasa \n 
            Urutan yang benar tentang siklus hidup Taenia solium dan Taenia saginata adalah ….',
            'answer_correct' => '1 - 3 - 2 - 4 - 5',
            'answer_1' => "3 - 1 - 2 - 4 - 5",
            'answer_2' => "1 - 3 - 4 - 2 - 5",
            'answer_3' => "3 - 1 - 4 - 2 - 5",
            'answer_4' => "3 - 4 - 1 - 2 - 5"
        ]);

        //very hard
        DB::table('bio11_soals')->insert([
            'question' => 'Jika biomassa produsen sebesar 15.000 gram. Maka besar biomassa untuk organisme tingkat trofik III adalah ….',
            'answer_correct' => '150 gram',
            'answer_1' => "1.500 gram",
            'answer_2' => "15 gram",
            'answer_3' => "15.000 gram",
            'answer_4' => "1,5 gram",
            'soal_image' => "biomassa.jpg"
        ]);

        //hard
        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan ciri-ciri berkas pengangkut berikut! \n

            1. Tipe kolateral tertutup atau konsentris amfivasal. \n
            2. Tipe kolateral terbuka atau bikolateral \n
            3. Terdapat parenkim floem \n
            4. Sarung berkas pengangkut jelas \n
            5. Tidak ada parenkim floem \n

            Ciri-ciri berkas pengangkut pada batang monocotyledoneae ditunjukkan oleh nomor ….',
            'answer_correct' => '1, 4, dan 5',
            'answer_1' => "1, 3, dan 4",
            'answer_2' => "2, 4, dan 5",
            'answer_3' => "3, 4, dan 5",
            'answer_4' => "2, 3, dan 4"
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan pernyataan di bawah ini ! \n

            1. Menghasilkan sekret \n
            2. Tidak mampu menghasilkan sekret \n
            3. Memiliki bentuk morfologi yang bermacam-macam \n
            4. Jenis sekret yang dihasilkan bermacam-macam \n
            5. Contohnya adalah kelenjar nektar, kelenjar garam dan rambut sengat \n
            6. Contohnya adalah rambut akar, trikoma sisik, trikoma bercabang dan trikoma filiform \n
            
            Ciri-ciri trikoma non-glanduler ditunjukkan oleh nomor …..',
            'answer_correct' => ' 2, 3 dan 6',
            'answer_1' => "2, 4, dan 6",
            'answer_2' => "1, 4 dan 6",
            'answer_3' => "2, 3 dan 5",
            'answer_4' => "1, 4 dan 5"
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Seorang pasien rumah sakit mengalami suatu penyakit dengan gejala yaitu demam, sesak napas, batuk dahak kental berwarna kuning dan detak jantung yang menjadi cepat. Setelah dilakukan pemeriksaan ditemukan bahwa ada sebuah bakteri yang terdapat di bagian alveolus pasien tersebut. Bakteri tersebut akan menyebabkan alveolus penuh dengan cairan. Struktur dari bakteri tersebut dapat dilihat pada gambar di bawah ini ',
            'answer_correct' => 'Radang paru-paru',
            'answer_1' => "Asfiksi",
            'answer_2' => "Laringitis",
            'answer_3' => "Asma",
            'answer_4' => "Emfisema"
        ]);
    }
}
