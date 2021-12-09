@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Hasil Kuis') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container d-flex justify-content-center">
                            <h1>{{ $akurasi }}%</h1>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <h5>Jawaban benar: <b>{{ $benar }}</b> dari <b>{{ $nomor }}</b> soal</h5>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <h5>Skor akhir: <b>{{ $point }}</b>
                        </div>
                        <hr>
                        <div class="container d-flex justify-content-center">
                            <a class="w-50 btn btn-lg btn-dark mb-1">Leaderboard</a>
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
