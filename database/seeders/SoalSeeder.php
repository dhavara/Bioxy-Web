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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '1',
            'difficulty_id' => '1',
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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '2',
            'difficulty_id' => '2',
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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '3',
            'difficulty_id' => '3',
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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '4',
            'difficulty_id' => '4',
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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '5',
            'difficulty_id' => '3',
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
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '6',
            'difficulty_id' => '2',
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Seorang pasien rumah sakit mengalami suatu penyakit dengan gejala yaitu demam, sesak napas, batuk dahak kental berwarna kuning dan detak jantung yang menjadi cepat. Setelah dilakukan pemeriksaan ditemukan bahwa ada sebuah bakteri yang terdapat di bagian alveolus pasien tersebut. Bakteri tersebut akan menyebabkan alveolus penuh dengan cairan. Struktur dari bakteri tersebut dapat dilihat pada gambar di bawah ini ',
            'answer_correct' => 'Radang paru-paru',
            'answer_1' => "Asfiksi",
            'answer_2' => "Laringitis",
            'answer_3' => "Asma",
            'answer_4' => "Emfisema"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '7',
            'difficulty_id' => '2',
        ]);

        //easy
        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan ciri-ciri makhluk hidup berikut ini ! \n

            1. Eukariot \n
            2. Heterotrof \n
            3. Pencernaan ekstraseluler \n
            4. Tidak memiliki klorofil \n
            5. Dinding sel tersusun atas kitin \n

            Peranan organisme yang memiliki ciri di atas dalam ekosistem adalah.....',
            'answer_correct' => 'Dekomposer',
            'answer_1' => "Konsumen",
            'answer_2' => "Produsen",
            'answer_3' => "Detritivor",
            'answer_4' => "herbivor"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '8',
            'difficulty_id' => '1',
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Kesimpulan yang tepat untuk gamar piramida energi diatas adalah....',
            'answer_correct' => 'Pada dasar piramid, jumlah individu dan jumlah energi yang terlibat adalah paling besar',
            'answer_1' => "Ketika puncak piramid dicapai, jumlah individu menurun tapi jumlah energinya meningkat",
            'answer_2' => "Ketika puncak piramid dicapai, jumlah individu meningkat, dan jumlah energi sama",
            'answer_3' => "Pada dasar piramid, jumlah individu dan jumlah energi yang terlibat adalah paling rendah",
            'answer_4' => "Pada semua tingkat, jumlah individu dan jumlah energi yang terlibat adalah sama",
            "soal_image" => "piramida.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '9',
            'difficulty_id' => '2',
        ]);

        //easy
        DB::table('bio11_soals')->insert([
            'question' => 'Pencemaran lingkungan dapat ditimbulkan oleh berbagai bahan pencemar, salah satunya adalah penumpukan kotoran dari peternakan. Cara mengatasi bahan pencemar itu sehingga menjadi bermanfaat bagi manusia adalah....',
            'answer_correct' => 'Menampung dan memprosesnya menjadi biogas',
            'answer_1' => "Mengeringkan dan memadatkannya sebagai bahan bakar",
            'answer_2' => "Mengolahnya menjadi makanan ternak",
            'answer_3' => "Memanfaatkannya untuk industri kertas",
            'answer_4' => "Memprosesnya sebagai bahan campuran industri kayu lapis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '10',
            'difficulty_id' => '1',
        ]);

        //very hard
        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan data hasil pengukuran volume udara pernapasan di bawah ini, pada seorang wanita, usia 20 tahun, posisi duduk, tinggi badan: 150 cm, berat badan: 44 kg, suhu kamar: 25°C. \n
            Berdasarkan data diatas udara cadangan inspirasi adalah sebanyak...',
            'answer_correct' => '750 ml',
            'answer_1' => "625 ml",
            'answer_2' => "1500 ml",
            'answer_3' => "3625  ml",
            'answer_4' => "4625 ml",
            "soal_image" => "tabelVolume.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '11',
            'difficulty_id' => '4',
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Pada sebuah percobaan perkecambahan, biji kacang merah ditanam dalam pot yang berbeda yaitu pot A dan B. Pot A ditanam biji kacang merah dengan pemberian air 10 ml perhari, sedangkan pot B ditanam biji kacang merah dengan pemberian air 25 ml perhari. Setelah didiamkan selama 5 hari kondisi pot A mulai tumbuh kecambah dan pot B tidak tumbuh kecambah. Berdasarkan percobaan di atas dapat disimpulkan bahwa....',
            'answer_correct' => 'Kadar air yang terlalu banyak pada pot B membuat biji mengalami pembusukan',
            'answer_1' => "Pemberian air tidak mempengaruhi proses perkecambahan",
            'answer_2' => "Air yang terlalu banyak tidak akan mempengaruhi proses perkecambahan",
            'answer_3' => "Laju penguapan tanaman pot A lebih tinggi sehingga kecambah dapat tumbuh",
            'answer_4' => "Laju penguapan tanaman pot B terlalu rendah sehingga kecambah busuk            "
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '12',
            'difficulty_id' => '2',
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Di bawah ini merupakan beberapa fungsi RNA:

            1. Disintesis dari pola DNA \n
            2. menerjemahkan kodon mRNA \n
            3. mengatur urutan asam-asam amino \n
            4. hasil dari aktivitas transkripsi \n
            5. membawa kode genetik ke ribosom \n
            6. mengikat asam-asam amino \n
            
            Fungsi dari mRNA adalah....',
            'answer_correct' => '1, 4, dan 5',
            'answer_1' => "1, 2, dan 3",
            'answer_2' => "1, 2, dan 4",
            'answer_3' => "2, 3, dan 4",
            'answer_4' => "4, 5, dan 6"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '13',
            'difficulty_id' => '2',
        ]);

        //hard
        DB::table('bio11_soals')->insert([
            'question' => 'Bakteri kemosintesis yang terlibat dalam persamaan reaksi \n
            Ca(NO2)2 +  O2 → Ca(NO3)2  adalah....',
            'answer_correct' => 'Nitrobacter',
            'answer_1' => "Nitrosomonas",
            'answer_2' => "Aztobacter",
            'answer_3' => "Acetobacter",
            'answer_4' => "Nitrococcus"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '14',
            'difficulty_id' => '2',
        ]);

        //easy
        DB::table('bio11_soals')->insert([
            'question' => 'Mikroorganisme yang digunakan dalam proses bioteknologi harus memiliki sifat-sifat tertentu, di antaranya....',
            'answer_correct' => 'Memiliki produktivitas yang tinggi serta sifat yang mudah dikendalikan',
            'answer_1' => "Menghasilkan produk yang bersifat alergen",
            'answer_2' => "Merupakan mikroba patogen yang membahayakan",
            'answer_3' => "Tidak menghasilkan racun atau toksin sampingan yang berbahaya",
            'answer_4' => "Memerlukan persyaratan nutrisi yang tidak rumit"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '15',
            'difficulty_id' => '1',
        ]);

        //medium
        DB::table('bio11_soals')->insert([
            'question' => 'Menurut grafik tersebut dapat disimpulkan bahwa....',
            'answer_correct' => 'Enzim sangat mempengaruhi kecepatan reaksi',
            'answer_1' => "Jenis enzim akan menentukan arah reaksi",
            'answer_2' => "Enzim akan meningkatkan jumlah energi suatu reaksi",
            'answer_3' => "Kualitas substrat akan lebih baik dengan adanya enzim",
            'answer_4' => "Enzim tidak menentukan arah reaksi",
            'soal_image' => "grafik.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '16',
            'difficulty_id' => '2',
        ]);

        // medium
        DB::table('bio11_soals')->insert([
            'question' => 'Urutan fase-fase yang benar dalam proses pembelahan mitosis adalah....',
            'answer_correct' => ' 5 - 1 - 4 - 2 - 3',
            'answer_1' => "4 - 5 - 1 - 2 - 3",
            'answer_2' => "3 - 4 - 2 - 5 - 1",
            'answer_3' => " 2 - 3 - 5 - 5 - 4",
            'answer_4' => "1 - 2 - 3 - 4 - 5",
            'soal_image' => "pembelahan.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '17',
            'difficulty_id' => '2',
        ]);
    }
}
