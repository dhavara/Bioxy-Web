@extends('layouts.app')

@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Kuis</h1>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="main-body">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card bg-primary text-white">

                    <div class="card-body">
                        <h4 class="card-title text-center">
                            Hasil Kuis
                        </h4>
                        <hr>
                        <div class="container d-flex justify-content-center">
                            <h1>{{ $akurasi }}%</h1>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <h5>Jawaban benar: <b>{{ $benar }}</b> dari <b>{{ $nomor }}</b> soal</h5>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <h5>Skor akhir: <b>{{ $point }}</b></h5>
                        </div>
                        <br>
                        <div class="container text-white fs-6">
                            Selamat! Anda mendapatkan {{ $totalpoint }} poin karena sudah berusaha memainkan kuis ini di level <i>{{ $difficulty }}</i>! Pergunakanlah poin ini di toko kami!
                        </div>
                        <hr>
                        <div class="container d-flex justify-content-center">
                            <a class="w-50 btn btn-lg btn-dark mb-1" href="{{ route('leaderboard') }}">Leaderboard</a>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <a class="w-50 btn btn-lg btn-dark mt-1" href="{{ route('quiz') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
