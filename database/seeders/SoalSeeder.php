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

        //easy
        DB::table('bio11_soals')->insert([
            'question' => 'Pada usia 5 hari, berat buah semangka adalah 5 kg. Pada usia 10 hari, berat semangka menjadi 15 kg. Namun pada usia 15 hari, berat semangka tetap 15 kg. Penafsiran dari data perkembangan tersebut adalah…',
            'answer_correct' => 'setelah usia 5 hari, berat buah terus bertambah dengan rata- rata pertambahan 2 kg/hari',
            'answer_1' => "pada usia 15 hari tercapai berat tertinggi",
            'answer_2' => "semakin bertambah usia, berat buah semakin bertambah pula",
            'answer_3' => "energi dapat tertimbun dalam bentuk jaringan tubuh",
            'answer_4' => "semakin bertambah berat buah, semakin bertambah pula usianya"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '18',
            'difficulty_id' => '1',
        ]);

        // medium
        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan gambar di bawah ini!',
            'answer_correct' => 'berperan sebagai reseptor suara',
            'answer_1' => "meneruskan getaran ke jendela oval",
            'answer_2' => "meneruskan getaran ke osikula",
            'answer_3' => "berperan sebagai reseptor gravitasi",
            'answer_4' => "menjaga keseimbangan udara",
            'soal_image' => "telinga.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '19',
            'difficulty_id' => '2',
        ]);

         // medium
         DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan gambar nefron di bawah ini! \n

            Hubungan yang tepat antara bagian yang ditunjuk oleh nomor 1, proses yang terjadi, dan hasilnya adalah...',
            'answer_correct' => 'Tubulus kontortus distal sebagai augmentasi menghasilkan urin sesungguhnya',
            'answer_1' => "Tubulus kontortus proksimal sebagai filtrasi menghasilkan urin sekunder",
            'answer_2' => "Glomerolus sebagai filtrasi menghasilkan urin primer",
            'answer_3' => "Tubulus kolektivus sebagai augmentasi menghasilkan urin sesungguhnya",
            'answer_4' => "Lengkung henle sebagai reabsorpsi menghasilkan urin sekunder",
            'soal_image' => "nefron.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '20',
            'difficulty_id' => '2',
        ]);

        // easy
        DB::table('bio11_soals')->insert([
            'question' => 'Niko mengalami batuk yang berkepanjangan dan menyebabkan batuk berdarah. Setelah dirontgen, terdapat bintik-bintik pada alveolusnya yang disebabkan oleh bakteri. Diagnosis dokter Niko menderita penyakit...',
            'answer_correct' => 'TBC',
            'answer_1' => "Asfiksi",
            'answer_2' => "Asidosis",
            'answer_3' => "Sinusitis",
            'answer_4' => "Emfisema"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '21',
            'difficulty_id' => '1',
        ]);

        // easy
        DB::table('bio11_soals')->insert([
            'question' => 'Penerapan bioteknologi bagi kehidupan manusia umumnya bermanfaat dalam meningkatkan kesejahteraan masyarakat. Tetapi dampak negatif yang mungkin timbul adalah hilangnya plasma nutfah yang akan menyebabkan....',
            'answer_correct' => 'keanekaragaman hayati menurun',
            'answer_1' => "punahnya organisme langka",
            'answer_2' => "berkurangnya daya dukung lingkungan",
            'answer_3' => "hilangnya daya dukung lingkungan",
            'answer_4' => "biaya rehabilitasi hutan meningkat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '22',
            'difficulty_id' => '1',
        ]);

        // hard
        DB::table('bio11_soals')->insert([
            'question' => 'Hasil percobaan enzim katalase menggunakan potongan hati dan H2O2 adalah sebagai berikut: \n
            
            Data di bawah menunjukkan bahwa yang memengaruhi kinerja enzim antara lain adalah....',
            'answer_correct' => 'suhu dan pH',
            'answer_1' => "banyaknya gelembung",
            'answer_2' => "potongan hati",
            'answer_3' => "macam substrat",
            'answer_4' => " jumlah H2O2",
            'soal_image' => "kinerja.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '23',
            'difficulty_id' => '3',
        ]);

         // very hard
         DB::table('bio11_soals')->insert([
            'question' => 'Disilangkan tanaman mangga buah bulat manis (BBMM) dengan buah lonjong manis (bbMm) hasil dari persilangan tersebut  adalah....            ',
            'answer_correct' => '100 % bulat manis',
            'answer_1' => "75 % bulat manis : 25 % lonjong manis",
            'answer_2' => "50 % bulat manis : 50 % lonjong manis",
            'answer_3' => "50 % bulat manis : 50 % lonjong pahit",
            'answer_4' => "100 % lonjong manis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '24',
            'difficulty_id' => '4',
        ]);

        // hard
        DB::table('bio11_soals')->insert([
            'question' => 'Berikut ini merupakan kelainan pada manusia yang terpaut autosom adalah....',
            'answer_correct' => 'Albino',
            'answer_1' => "Hemofilia",
            'answer_2' => "Buta warna",
            'answer_3' => "Anodontia",
            'answer_4' => "Hypertrichosis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '25',
            'difficulty_id' => '3',
        ]);

        // hard
        DB::table('bio11_soals')->insert([
            'question' => 'Salah satu dampak negatif bioteknologi yaitu terganggunya keanekaragaman hayati yang ditunjukkan dengan....',
            'answer_correct' => 'kecenderungan penggunaan bibit unggul menyingkirkan varietas lokal yang kurang unggul',
            'answer_1' => "menurunnya kualitas kesuburan tanah",
            'answer_2' => "banyak mikroogranisme tanah yang mengalami mutasi",
            'answer_3' => "limbah yang berasal dari proses bioteknologi akan mencemari lingkungan",
            'answer_4' => "polusi gen akan memicu tumbuhnya tanaman liar yang dapat mengganggu keseimbangan lingkungan"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '26',
            'difficulty_id' => '1',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '26',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan peta silsislah hemofili berikut ini! Dari data silsilah di bawah dapat diketahui bahwa....',
            'answer_correct' => 'ibu carier',
            'answer_1' => "ayah carier",
            'answer_2' => "ibu homozigot resesif",
            'answer_3' => "ibu homozigot dominan",
            'answer_4' => "ayah homozigot dominan",
            'soal_image' => "hereditas.png"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '27',
            'difficulty_id' => '3',
        ]);

        //baru
        DB::table('bio11_soals')->insert([
            'question' => 'Jika menahan napas, maka keinginan bernapas menjadi tidak terkendali. Hal ini disebabkan karena….',
            'answer_correct' => 'kekurangan zat asam dalam otak',
            'answer_1' => "kebanyakan CO2 dalam darah",
            'answer_2' => "kekurangan zat asam dalam jantung",
            'answer_3' => " kebanyakan CO2 dalam paru-paru",
            'answer_4' => "kekurangan zat asam dalam darah"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '28',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Paru-paru burung berhubungan dengan kantong-kantong udara yang terdapat pada beberapa alat dalam. Fungsi kantong udara tersebut adalah….',
            'answer_correct' => 'membantu membesarkan ruang siring dan memperkeras suara',
            'answer_1' => "membantu pernapasan saat akan terbang",
            'answer_2' => "menyerap panas untuk menurunkan temperatur tubuh",
            'answer_3' => "membantu memasukkan udara dari luar ke paru-paru",
            'answer_4' => " membantu mengeluarkan udara dari paru-paru ke luar tubuh"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '29',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Pernyataan yang benar mengenai ekspirasi pada pernapasan perut dan pernapasan dada adalah….',
            'answer_correct' => 'pernapasan perut diafragma relaksasi pernapasan dada otot antarusuk relaksasi',
            'answer_1' => "pernapasan perut diagragma kontraksi pernapasan dada otot antarrusuk relaksasi",
            'answer_2' => "pernapasan perut diagragma relaksasi pernapasan dada otot antarusuk kontraksi",
            'answer_3' => "pernapasan perut otot dinding perut kontraksi pernapasan dada otot antarrusuk kontraksi",
            'answer_4' => "pernapasan perut otot dinding perut kontraksi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '30',
            'difficulty_id' => '1',
        ]);  
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '30',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Di bawah ini beberapa pernyataan yang berhubungan dengan respirasi!
            1) Terjadinya pengikatan oksigen oleh kapiler darah alveolus 2) merupakan respirasi eksternal 3) Proses dipengaruhi O2
            4) Tekanan partial oksigen alveolus tinggi 5) Tekanan partial oksigen jaringan tinggi
            Dari pernyataan di atas, pernyataan yang sesuai dengan reaksi Hb + 4O2 ==> HbO2 adalah….',
            'answer_correct' => '1, 2, dan 4',
            'answer_1' => "1, 2, dan 3",
            'answer_2' => "2, 3, dan 4",
            'answer_3' => "2, 3 dan 5",
            'answer_4' => "3, 4 dan 5"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '31',
            'difficulty_id' => '2',
        ]);  
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '31',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Pernyataan yang tidak benar mengenai gangguan pencernaan dan penyebabnya adalah….',
            'answer_correct' => 'ulkus disebabkna racun yang dikeluarkan oleh bakteri',
            'answer_1' => " sembelit, disebabkan kurang makanan berserat",
            'answer_2' => "diare disebabkan kelebihan asam lambung",
            'answer_3' => "gastritis disebabkan iritasi pada dinding kolon",
            'answer_4' => "radang usus buntu disebabkan adanya gangguan absorbsi air"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '32',
            'difficulty_id' => '1',
        ]);  
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '32',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Lubang pernapasan pada serangga disebut….',
            'answer_correct' => 'spirakel',
            'answer_1' => "trakea",
            'answer_2' => "insang",
            'answer_3' => "pori-pori",
            'answer_4' => "trakeola"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '33',
            'difficulty_id' => '1',
        ]);  
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '33',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Fungsi ginjal yang berkaitan dengan usaha tubuh untuk menjaga keseimbagan kadar cairan dalam tubuh adalah….',
            'answer_correct' => 'mempertahankan tekanan osmosis cairan ekstraseluler',
            'answer_1' => "mengekskresikan zat-zat yang membahayakan tubuh",
            'answer_2' => "mempertahankan keseimbangan asam dan basa",
            'answer_3' => "mengekskresikan zat-zat racun",
            'answer_4' => "melakukan filtrasi dan reabsorspsi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '34',
            'difficulty_id' => '2',
        ]);  
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '34',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Pada pernapasan dada yang berkontraksi adalah otot….',
            'answer_correct' => 'antartulang rusuk',
            'answer_1' => "pengangkat rusuk",
            'answer_2' => "diafragma",
            'answer_3' => "diafragma dan pengangkat rusuk",
            'answer_4' => "antarrusuk, pengangkat rusuk, dan diafragma"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '35',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Unsur penyusun protein selain C, H, dan O adalah….',
            'answer_correct' => 'N dan S',
            'answer_1' => "N dan Fe",
            'answer_2' => "Na dan P",
            'answer_3' => "Ca dan Mg",
            'answer_4' => "N dan Cl"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '36',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Karbohidrat disimpan dalam hati dalam bentuk…..',
            'answer_correct' => 'glikogen',
            'answer_1' => "lemak padat",
            'answer_2' => "pati",
            'answer_3' => "lemak cair",
            'answer_4' => "karbon"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '37',
            'difficulty_id' => '1',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '37',
            'difficulty_id' => '2',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan gambar di bawah ini! Pada gambar di samping organ yang berlabel X berfungsi untuk….',
            'answer_correct' => 'tempat berlangsungnya sintesis protein',
            'answer_1' => "pusat aktifitas sel",
            'answer_2' => "sebagai jalur transportasi zat",
            'answer_3' => "tempat berlangsungnya respirasi sel",
            'answer_4' => "tempat berlangsungnya proses fotosintesis",
            'soal_image' => "sel.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '38',
            'difficulty_id' => '1',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '38',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Suatu jaringan memiliki ciri-ciri sebagai berikut: 1) Gelap dan keruh 2) Sumber kolagen tersusun sejajar membentuk satu berkas 3) Terdapat pada persendian tulang pinggang
            Jaringan yang dimaksud adalah….',
            'answer_correct' => 'rawan fibrosa',
            'answer_1' => "rawan hialin",
            'answer_2' => "rawan elastis",
            'answer_3' => "tulang kompak",
            'answer_4' => "tulang spons"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '39',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Jaringan epitel berikut yang terdapat pada saluran kelenjar keringat adalah….',
            'answer_correct' => 'epitel kubus berlapis banyak',
            'answer_1' => "epitel pipih selapis",
            'answer_2' => "epitel kubus selapis",
            'answer_3' => "epitel silindris selapis",
            'answer_4' => "epitel kelenjar"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '40',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan jenis-jenis tulang berikut: 1)tulang pipa 2)tulang rawan 3)tulang pipih 4)tulang pendek 5)tulang spons
            Kelompok tulang berdasarkan bentuknya ditunjukkan oleh nomor….',
            'answer_correct' => '1, 3, dan 4',
            'answer_1' => "1, 2, dan 3",
            'answer_2' => "2, 3, dan 4",
            'answer_3' => "2, 3, dan 5",
            'answer_4' => "3, 4, dan 5"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '41',
            'difficulty_id' => '2',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '41',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan tabel berikut: Hubungan yang benar antara jaringan dengan fungsinya adalah….',
            'answer_correct' => '5 dan 5',
            'answer_1' => "1 dan 2",
            'answer_2' => "2 dan 3",
            'answer_3' => "3 dan 4",
            'answer_4' => "4 dan 5",
            'soal_image'=>"tabelOtot.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '42',
            'difficulty_id' => '2',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '42',
            'difficulty_id' => '3',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan tabel berikut: Hubungan yang benar antara jaringan dengan fungsinya adalah….',
            'answer_correct' => 'mitokondria',
            'answer_1' => "lisosom",
            'answer_2' => "nukleus",
            'answer_3' => "retikulum endoplasma",
            'answer_4' => "ribosom"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '43',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Aktivitas jaringan meristem primer akan mengakibatkan…',
            'answer_correct' => 'Bertambah panjangnya akar dan batang',
            'answer_1' => "Membesarnya akar dan batang",
            'answer_2' => "Terbentuknya pembuluh kayu",
            'answer_3' => "Terbentuknya pembuluh kulit kayu",
            'answer_4' => "Terbentuknya xilem dan floem"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '44',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Di bawah ini adalah bagian dari berbagai organ tumbuhan: 1)Epidermis 2)Xilem 3)Floem 4)Korteks 5)Endodermis 
            Jalannya transportasi air dan garam dari akar ke batang dan daun berturut-turut melalui…',
            'answer_correct' => '1-4-5-2',
            'answer_1' => "1-2-4-5",
            'answer_2' => "1-3-4-5",
            'answer_3' => "1-5-4-2",
            'answer_4' => "1-5-4-3"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '44',
            'difficulty_id' => '1',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '44',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Pernyataan berikut merupakan ciri jaringan epidermis, kecuali….',
            'answer_correct' => 'Mengandung banyak kloroplas',
            'answer_1' => "Sel-sel berbentuk seperti balok",
            'answer_2' => "Bermodifikasi menjadi stomata",
            'answer_3' => "Dilengkapi lapisan lilin",
            'answer_4' => "Sel-sel tersusun rapat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '45',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Jaringan floem berfungsi untuk…',
            'answer_correct' => 'Mengangkut zat makanan dari daun ke seluruh bagian tumbuhan',
            'answer_1' => "Sebagai jalan masuk air dan garam mineral",
            'answer_2' => "Mengangkut air dan garam mineral dari tanah menuju daun",
            'answer_3' => "Penyimpan cadangan makanan",
            'answer_4' => "Membentuk cabang akar dan kambium gabus"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '46',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Perhatikan gambar potongan melintang daun dikotil berikut: Nama dan fungsi struktur yang berlabel X adalah',
            'answer_correct' => 'Jaringan parenkim palisade berfungsi untuk melakukan fotosintesis',
            'answer_1' => "Jaringan parenkim spons berfungsi untuk mengatur kadar air",
            'answer_2' => "Jaringan epidermis berfungsi untuk pelindung",
            'answer_3' => "Jaringan xilem berfungsi untuk mengangkut air dan garam mineral",
            'answer_4' => "Sel stomata berfungsi untuk mengatur penguapan air",
            'soal_image' =>"JaringanPal.jpg"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '47',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Sifat totipotensi tumbuhan berarti…..',
            'answer_correct' => 'Kemampuan sel, jaringan atau organ tumbuhan untuk tumbuh dan berkembang menjadi suatu organism yang utuh',
            'answer_1' => "Kemampuan tumbuhan untuk tumbuh dan berkembang",
            'answer_2' => "Kemampuan tumbuhan untuk menduplikasi diri",
            'answer_3' => "Kemampuan tumbuhan untuk mengeluarkan energinya",
            'answer_4' => "Kemampuan tumbuhan untuk berubah menjadi individu yang lengkap jaringannya"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '48',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Yang bukan merupakan manfaat teknik kultur jaringan adalah….',
            'answer_correct' => 'Melestarikan jenis tanaman yang hampir punah',
            'answer_1' => "Untuk menghasilkan tanaman baru dalam jumlah besar dalam waktu  yang singkat dengan sifat dan kualitas sama dengan induknya",
            'answer_2' => "Mendapatkan tanaman yang bebas dari kuman dan penyakit",
            'answer_3' => "Mempertahankan keaslian sifat-sifat tanaman",
            'answer_4' => "Mendapatkan tanaman yang berbuah besar"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '49',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Ditemukan jaringan dengan ciri-ciri sebagai berikut: -bentuk pipih, kubus atau silindris -terletak di permukaan organ -berfungsi sebagai proteksi dan sekresi 
            Jaringan yang dimaksud adalah….',
            'answer_correct' => 'epitel',
            'answer_1' => "saraf",
            'answer_2' => "otot",
            'answer_3' => "lemak",
            'answer_4' => "ikat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '50',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Jaringan epitel yang melapisi bagian dalam saluran pencernaan makanan adalah ….',
            'answer_correct' => 'jaringan epitel silindris selapis',
            'answer_1' => "epitel pipih berlapis selapis",
            'answer_2' => "epitel pipih berlapis banyak",
            'answer_3' => "epitel bersilia berlapis banyak",
            'answer_4' => "epitel kubus berlapis banyak"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '51',
            'difficulty_id' => '3',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '51',
            'difficulty_id' => '4',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Jika ujung tulang yang satu dapat mengitari ujung tulang yang lain dan memungkinkan gerakan rotasi dan berporos maka disebut sendi …',
            'answer_correct' => 'putar',
            'answer_1' => "geser",
            'answer_2' => "pelana",
            'answer_3' => "engsel",
            'answer_4' => "luncur"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '52',
            'difficulty_id' => '1',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Yang merupakan perbedaan sel hewan dan sel tumbuhan adalah …',
            'answer_correct' => 'Pada sel tumbuhan terdapat plastida, pada sel hewan tidak ada',
            'answer_1' => "Pada sel hewan terdapat plastid, pada sel tumbuhan tidak ada",
            'answer_2' => "Pada sel hewan tidak ada badan golgi, pada sel tumbuhan ada",
            'answer_3' => "Pada sel hewan tedapat badan golgi, pada sel tumbuhan tidak ada",
            'answer_4' => "Pada sel hewan ada vakuola yang besar, pada sel tumbuhan ada vakuola yang kecil"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '53',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Organel yang merupakan tempat berlangsungnya sintesis protein adalah …',
            'answer_correct' => 'ribosom',
            'answer_1' => "lisosom",
            'answer_2' => "sentrosom",
            'answer_3' => "mitokondria",
            'answer_4' => "kromosom"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '54',
            'difficulty_id' => '1',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '54',
            'difficulty_id' => '2',
        ]);

        DB::table('bio11_soals')->insert([
            'question' => 'Membran plasma terdiri atas ….',
            'answer_correct' => 'lipid dan protein',
            'answer_1' => "karbohidrat dan protein",
            'answer_2' => "karbohidrat dan fosfolipid",
            'answer_3' => "kalsium dan lipid",
            'answer_4' => "karbohidrat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '55',
            'difficulty_id' => '2',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '55',
            'difficulty_id' => '3',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => ' Transport zat melalui membran plasma dapat berlangsung dengan transport aktif, transport aktif adalah….',
            'answer_correct' => 'Transport yang memerlukan energi untuk keluar masuknya molekul zat melalui membran',
            'answer_1' => "Transport dari larutan yang konsentrasinya rendah ke larutan yang konsentrasinya tinggi",
            'answer_2' => "Transport dari larutan yang konsentrasinya tinggi ke larutan yang konsentrasinya rendah",
            'answer_3' => "Transport yang mengendalikan pertukaran zat tanpa memerlukan energi",
            'answer_4' => "Transpor yang dipengaruhi ion Na tanpa memerlukan energi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '56',
            'difficulty_id' => '3',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '56',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Transport membran yang tergolong transport pasif adalah….',
            'answer_correct' => 'osmosis',
            'answer_1' => "pinositosis",
            'answer_2' => "fagositosis",
            'answer_3' => "eksositosis",
            'answer_4' => "endositosis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '57',
            'difficulty_id' => '3',
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '57',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Beberapa jenis sel yang dapat memasukkan zat padat atau tetes cairan melalui membran sel. Peristiwa semacam ini disebut….',
            'answer_correct' => 'endositosis ',
            'answer_1' => "eksositosis ",
            'answer_2' => "difusi",
            'answer_3' => "osmosis",
            'answer_4' => "plasmolisis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '58',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Pernyataan di bawah ini adalah ciri-ciri gangguan pada sistem gerak: 1)tulang patah atau retak 2)terjadi pembengkakan 3)kemungkinan terjadi pendarahan 
            Jenis gangguan pada sistem gerak tersebut adalah….',
            'answer_correct' => 'fraktura',
            'answer_1' => "kifosis ",
            'answer_2' => "rakhitis",
            'answer_3' => "artritis",
            'answer_4' => "nekrosa"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '59',
            'difficulty_id' => '1',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '59',
            'difficulty_id' => '2',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Gerakan yang terjadi antara tulang pergelangan kaki atau tulang pergelangan tangan termasuk…',
            'answer_correct' => 'sendi luncur',
            'answer_1' => "sendi engsel",
            'answer_2' => "sendi peluru",
            'answer_3' => "sendi pelana",
            'answer_4' => "sendi rotasi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '60',
            'difficulty_id' => '1',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '60',
            'difficulty_id' => '2',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Kelainan tulang belakang yang melengkung kearah samping kiri atau kanan dinamakan….',
            'answer_correct' => 'skoliosis',
            'answer_1' => "kifosis",
            'answer_2' => "lodosis",
            'answer_3' => "ankoliosis",
            'answer_4' => "dislokasi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '61',
            'difficulty_id' => '1',
        ]);
        
        DB::table('bio11_soals')->insert([
            'question' => 'Orang yang mengalami koma dalam jangka waktu lama, saat siuman tidak segera dapat menggerakkan anggota badannya seperti orang normal. Selain karena masih dalam kondisi pemulihan hal itu juga terjadi karena otot mengecil. Kelainan ini disebut….',
            'answer_correct' => 'atrofi otot',
            'answer_1' => "hipertrofi otot",
            'answer_2' => "stiff",
            'answer_3' => "distorsi otot",
            'answer_4' => "tetanus"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '62',
            'difficulty_id' => '2',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Sel darah yang aktif bekerja dalam sistem kekebalan tubuh, yaitu:',
            'answer_correct' => 'limfosit',
            'answer_1' => "basofil",
            'answer_2' => "neutrofil",
            'answer_3' => "eosinofil",
            'answer_4' => "monosit"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '62',
            'difficulty_id' => '2',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Akibat yang terjadi apabila salah satu katup pada jantung manusia mengalami kerusakan adalah….',
            'answer_correct' => 'terganggunya aliran darah dari satu ruang ke ruang lain',
            'answer_1' => "darah tidak dapat dipompa ke seluruh tubuh",
            'answer_2' => "denyut jantung makin cepat",
            'answer_3' => "jantung tidak dapat berkontraksi",
            'answer_4' => "pemompaan darah makin cepat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '63',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Serabut jaringan ikat yang tersusun dari protein kolagen dan mempunyai daya regang sangat tinggi dengan elastisitas rendah adalah…',
            'answer_correct' => 'serabut fibroblast',
            'answer_1' => "serabut retikuler",
            'answer_2' => "serabut elastis",
            'answer_3' => "serabut kolagen",
            'answer_4' => "serabut elastin"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '64',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => ' Berikut ini pernyataan yang benar mengenai jaringan tulang sejati….',
            'answer_correct' => 'memiliki matriks interselluler yang mengapur oleh endapan garam  mineral',
            'answer_1' => "matriks terdiri atas kondrin",
            'answer_2' => "sel penyusunnya disebut kondrosit",
            'answer_3' => "dapat ditemukan di permukaan tulang sejati",
            'answer_4' => "berfungsi membentuk sebagian besar rangka embrional"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '65',
            'difficulty_id' => '3',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Tulang disebut alat gerak pasif, sebab…',
            'answer_correct' => 'tidak mempunyai kemampuan untuk berkontraksi',
            'answer_1' => "melekat pada otot rangka",
            'answer_2' => "sebagai tempat pembentukan sel-sel darah",
            'answer_3' => "saling berhubungan membentuk sendi",
            'answer_4' => "merupakan penopang dan penunjang bentuk tubuh"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '66',
            'difficulty_id' => '2',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '66',
            'difficulty_id' => '3',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Tekanan darah sistol adalah tekanan darah sewaktu jantung….',
            'answer_correct' => 'kontraksi',
            'answer_1' => "terisi darah",
            'answer_2' => "relaksasi",
            'answer_3' => "melemas",
            'answer_4' => "istirahat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '67',
            'difficulty_id' => '3',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '67',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Berikut adalah komponen kimiawi organik penyusun sel adalah ....',
            'answer_correct' => 'Karbohidrat, asam nukleat dan lemak',
            'answer_1' => "Lemak, protein dan air",
            'answer_2' => "Protein, air dan lemak",
            'answer_3' => "Karbohidrat, oksigen dan lemak",
            'answer_4' => "Asam nukleat, protein oksigen"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '68',
            'difficulty_id' => '1',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Berikut merupakan pemahaman sel sebagai unit fungsional terkecil dari mahluk hidup ialah ….',
            'answer_correct' => 'Sel tersusun atas molekul organik dan non organik',
            'answer_1' => "Sel merupakan memiliki struktur yang khas",
            'answer_2' => "Organel sel tersusun atas protein, lemak dan karbohidrat",
            'answer_3' => "Sel tersusun atas protein struktural dan fungsional",
            'answer_4' => "Sel melakukan aktifitas hidup seperti organisme"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '69',
            'difficulty_id' => '1',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Gambar skema struktur sel. Organel Y merupakan organel yang dimiliki sel hewan maupun sel tumbuhan. 
            Organel tersebut mempunyai suatu sistem membran yang komplek dalam sitoplasma. Fungsi membran tersebut adalah.....',
            'answer_correct' => 'Tempat respirasi aerob dalam sel',
            'answer_1' => "Menghancurkan organel lain yang tidak berfungsi",
            'answer_2' => "Menggabungkan asam amino menjadi rantai polipeptida",
            'answer_3' => "Menyalurkan hasil sintesis protein kedalam inti",
            'answer_4' => "Mentransfer dan mengubah materi-materinya",
            'soal_image' => "selT.png"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '70',
            'difficulty_id' => '1',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Pasangan nama organel dan fungsinya yang benar adalah ....',
            'answer_correct' => 'lisosom - pencerna sel yang rusak',
            'answer_1' => "membran sel - respirasi",
            'answer_2' => "nukleus - transportasi",
            'answer_3' => "retikulum endoplasma - sintesis protein",
            'answer_4' => "mitokondria - reproduksi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '71',
            'difficulty_id' => '1',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Peristiwa mengkerutnya sel pada sel tumbuhan karena air keluar dari sel disebut ....',
            'answer_correct' => 'plasmolisis',
            'answer_1' => "Hipotonik",
            'answer_2' => "hemolisis",
            'answer_3' => "endositosis",
            'answer_4' => "krenasi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '72',
            'difficulty_id' => '1',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Eksositosis dilakukan sel untuk ….',
            'answer_correct' => 'mengeluarkan zat sisa',
            'answer_1' => "mencerna makanan",
            'answer_2' => "sintesis protein",
            'answer_3' => "menyimpan makanan cadangan",
            'answer_4' => "mencari makan"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '73',
            'difficulty_id' => '3',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => ' Proses masuknya zat cair ke dalam sel terjadi secara ….. ',
            'answer_correct' => 'pinositosis',
            'answer_1' => "fagositosis",
            'answer_2' => "endositosis",
            'answer_3' => "eksositosis",
            'answer_4' => "autolysis"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '74',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Dalam sintesis protein terjadi proses transkripsi. Kejadian pada proses transkripsi adalah… ',
            'answer_correct' => 'pencetakan mRNA oleh DNA di dalam inti sel',
            'answer_1' => "merangkai asam-asam amino di ribosom menjadi protein",
            'answer_2' => "penerjemah kode oleh tRNA yang dibawa oleh mRNA",
            'answer_3' => "keluarnya mRNA dari dalam inti sel menuju ribosom",
            'answer_4' => "pembentukan tRNA di dalam ribosom oleh mRNA"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '75',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => ' Unsur penting sebagai medium reaksi kimia dan merupakan bahan penyusun sitoplasma adalah….',
            'answer_correct' => 'air',
            'answer_1' => "lemak",
            'answer_2' => "garam mineral",
            'answer_3' => "protein",
            'answer_4' => "karbohidrat"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '76',
            'difficulty_id' => '3',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '76',
            'difficulty_id' => '4',
        ]); 

        DB::table('bio11_soals')->insert([
            'question' => 'Bagian dari sel yang bersifat semipermeabel adalah….',
            'answer_correct' => 'membran sel',
            'answer_1' => "retikulum endoplasma",
            'answer_2' => "protoplasma",
            'answer_3' => "dinding sel",
            'answer_4' => "badan golgi"
        ]);
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '77',
            'difficulty_id' => '1',
        ]); 
        DB::table('bio11_soals_difficulties')->insert([
            'soal_id' => '77',
            'difficulty_id' => '2',
        ]); 
    }
}
