@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Pengguna') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container text-center">
                        <div class="fs-3">
                            {{ $user['username'] }}
                        </div>
                        @if ($user->detail['user_title'] != '')
                        <div class="fs-5"> 
                            {{ $user->detail['user_title'] }}
                        </div>
                        @else
                        <div class="fs-5"> 
                            Pengguna Biasa
                        </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="@if ($user->detail['user_image'] == '') /img/null.png @else /img/user/{{ $league['user_image'] }} @endif" height="150px" width="150px"/>
                        </div>
                        <div>
                            <div class="container mt-2">
                                <b>Nama Asli:</b> {{ $user['name'] }}<br>
                                <b>Alamat Email:</b> {{ $user['email'] }}<br>
                                <b>Asal Sekolah:</b> {{ $user['school'] }}<br>
                                <b>Asal Kota:</b> {{ $user['city'] }}<br>
                                <b>Tanggal Lahir:</b> {{ date("d-m-Y", substr($user['birthdate'], 0, 10)) }}<br>
                                <b>Tanggal Pendaftaran:</b> {{ date_format($user['created_at'],"d-m-Y") }}<br>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <b>Riwayat</b>
                    <i> di sini menampilkan tabel history (proses pembuatan)</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
