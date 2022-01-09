@extends('layouts.app')

@section('content')

<div class="ex-page-content bootstrap snippets bootdeys">
  <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="message-box">
              <h1>Welcome to Bioxy Website</h1>
              <p class="bg-text sz-text">Ayo kita belajar biologi dan pintar bersama-sama :) hanya di Bioxy!</p>
          </div>
        </div>
          <div style="width:400px">
            <img class="card-img-top" src="/img/LogoBioxy.png" alt="Card image" height="400px" width="200px">
          </div>
      </div>
  </div>
</div>

<br><br><br><br><br><br>

  <div id="section1" class="container bg-secondary text-white text-center" style="padding:100px;">
      <div class="row justify-content-center text-center">
        <div class="col-lg-12">
            <h2 class="font-300">Cara Kerja Bioxy?</h2>
            <p class="font-300 bg-textonly">Disinilah tempat dimana kita dapat belajar bagaimana menggunakan bioxy dengan bijak.</p>
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
                        <p class="timeline-subtitle bg-textonly">Buatlah akun dengan mengisi biodata setelah menekan tombol register agar dapat memulai Bioxy dan mendapatkan manfaat dari aplikasi kami. Tenang aja semua data anda akan aman dijaga oleh perusahaan kami :)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="works works-description-left">
                        <h4>bermain dengan menekan tombol play</h4>
                        <p class="timeline-subtitle bg-textonly">Setelah anda membuat akun, ditampilan bioxy anda akan muncul tombol play, dimana anda akan memulai bioxy yang sebenarnya, sebelum menekan tombol play disarankan untuk mempersiapkan diri dengan belajar yang giat :)</p>
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
                        <p class="timeline-subtitle bg-textonly">Setelah selesai bermain bioxy pasti banyak pelajaran yang kita dapat, disinilah waktunya untuk belajar dari kesalahan-kesalahan kita saat bermain bioxy dan mempersiapkan diri untuk bioxy selanjutnya!</p>
                        <p class="timeline-subtitle bg-textonly">Tetap semangat yaa teman-teman :)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <br><br><br>

<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
                <div class="panel-body text-center">
                	<p class="text-uppercase mar-btm text-sm">Contact</p>
                  <li class="nav-item btn btn-secondary">
                    <a class="nav-link" href="/contact">Contact Us</a>
                  </li>
                	<hr>
                	<small><span class="text-semibold"></span> Jika ada masalah dan masukkan yang ingin anda sampaikan silahkan tekan tombol diatas</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-info panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Story</p>
              <h3>Bioxy Short Story</h3>
              <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                Open Story
              </button>
        			<hr>
        			<small><span class="text-semibold"><i class="fa fa-dollar fa-fw"></i></span> Short story about how we can build Bioxy</small>
        		</div>
        	</div>
        </div>        
	</div>
</div>

<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title">Bioxy's Story</h2>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p class="colorp">Bioxy adalah aplikasi yang bertujuan untuk mempelajari lebih banyak hal dari biologi terutama biologi kelas 11. Aplikasi ini dapat membantu anda dengan memberikan banyak pertanyaan dari tingkat kesulitan yang berbeda-beda dan dari soal tersebut anda akan mempelajari kesalahan maupun mempelajari soal-soal baru yang ada.</p>
  </div>
</div>

@endsection