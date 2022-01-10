@extends('layouts.app')

@section('content')

    <div class="ex-page-content bootstrap snippets bootdeys pt-5">
        <div class="container">
            <div class="message-box d-flex justify-content-between">
                <div class="w-50">
                    <h1 class="text-secondary">Welcome to Bioxy Quiz Web</h1>
                    <span class="bg-secondary bg-text sz-text text-center ps-2 pe-2">Belajar Biologi dengan seru bersama Bioxy! Powered by KELD Team.</span>
                </div>
                <div>
                    <img class="card-img-top" src="/img/LogoBioxy.png" alt="Card image" height="350px" width="350px">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div id="section1" class="container bg-secondary text-white text-center" style="padding:100px;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="font-300">Cara Kerja Bioxy?</h2>
                <p class="font-300 bg-textonly">Disinilah tempat dimana kita dapat belajar bagaimana menggunakan bioxy
                    dengan bijak.</p>
            </div>
        </div>
        <div class="timeline-page mt-5">
            <div class="timeline-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="duration date-label-left">
                            <img src="https://themesdesign.in/landsay/images/how-it-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="works works-description-right">
                            <h4>buatlah sebuah akun dengan register</h4>
                            <p class="timeline-subtitle bg-textonly">Buatlah akun dengan mengisi biodata setelah menekan
                                tombol register agar dapat memulai Bioxy dan mendapatkan manfaat dari aplikasi kami. Tenang
                                aja semua data anda akan aman dijaga oleh perusahaan kami :)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="works works-description-left">
                            <h4>bermain dengan menekan tombol play</h4>
                            <p class="timeline-subtitle bg-textonly">Setelah anda membuat akun, ditampilan bioxy anda akan
                                muncul tombol play, dimana anda akan memulai bioxy yang sebenarnya, sebelum menekan tombol
                                play disarankan untuk mempersiapkan diri dengan belajar yang giat :)</p>
                            <p class="timeline-subtitle bg-textonly">Semangat teman-teman!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="duration duration-right ">
                            <img src="https://themesdesign.in/landsay/images/how-it-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="duration date-label-left">
                            <img src="https://themesdesign.in/landsay/images/how-it-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="works works-description-right">
                            <h4>belajar dari kekurangan</h4>
                            <p class="timeline-subtitle bg-textonly">Setelah selesai bermain bioxy pasti banyak pelajaran
                                yang kita dapat, disinilah waktunya untuk belajar dari kesalahan-kesalahan kita saat bermain
                                bioxy dan mempersiapkan diri untuk bioxy selanjutnya!</p>
                            <p class="timeline-subtitle bg-textonly">Tetap semangat yaa teman-teman :)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

@endsection
