@extends('layouts.app')
@section('content')

    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Profile</h1>
    </div>

    <div class="main-body">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center text-center">
                            {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle" width="165"> --}}
                            <div class="mt-2">
                                <div class="pb-5 mb-5">
                                    {{-- <img id="user_img" src="/img/female.jpg" height="150px" width="150px" />
                        <img id="user_frame" src="@if ($user->detail['user_image'] == '') /img/null.png @else /img/user/{{ $league['user_image'] }} @endif" height="150px" width="150px" /> --}}

                                    <img id="user_img" src="@if ($user->detail['user_image'] == '') /img/null.png @else /img/user/{{ $league['user_image'] }} @endif" height="120px" width="120px" />
                                    @if ($user->detail['user_frame'] != '')
                                        <img id="user_frame" src="/img/frame/{{ $user->detail['user_frame'] }}"
                                            height="120px" width="120px" />
                                    @endif
                                </div>
                                <div class="fs-3 pt-4" @if ($user->detail['user_color'] != '') style="color: {{ $user->detail['user_color'] }}" @endif>
                                    {{ $user['username'] }}
                                </div>
                                @if ($user->detail['user_title'] != '')
                                    <div class="text-muted fs-6">
                                        {{ $user->detail['user_title'] }}
                                    </div>
                                @else
                                    <div class="text-muted fs-6">
                                        Pengguna Biasa
                                    </div>
                                @endif
                                {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                                <hr>
                                <div class="container d-flex justify-content-center">
                                    <a class="w-100 btn btn-lg btn-dark" href="{{-- route('editprofile') --}}" onclick="event.preventDefault();
                                    document.getElementById('edit').submit();">Edit Profile</a>
                                </div>
                                <form id="edit" action="{{-- route('editprofile') --}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="kev card mb-3">
                    <div class="card-body">
                        <div class="col-sm-5">
                            <h6 class="kev mb-0"><b>Nama Lengkap:</b> {{ $user['name'] }}</h6>
                        </div>
                        <hr>
                        <div class="col-sm-5">
                            <h6 class="kev mb-0"><b>Email:</b> {{ $user['email'] }} </h6>
                        </div>
                        <hr>
                        <div class="kev col-sm-5">
                            <h6 class="mb-0"><b>Sekolah:</b> {{ $user['school'] }}</h6>
                        </div>
                        <hr>
                        <div class="kev col-sm-5">
                            <h6 class="mb-0"><b>Kota:</b> {{ $user['city'] }}</h6>
                        </div>
                        <hr>
                        <div class="kev col-sm-5">
                            <h6 class="mb-0"><b>Tanggal lahir:</b>
                                {{ date('d-m-Y', substr($user['birthdate'], 0, 10)) }}</h6>
                        </div>
                        <hr>
                        <div class="kev col-sm-5">
                            <h6 class="mb-0"><b>Tanggal pendaftararan:</b>
                                {{ date_format($user['created_at'], 'd-m-Y') }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="fs-4 ms-3 mt-3">Riwayat Kuis</div>
                    <hr>
                    <div class="row justify-content-center ms-2 me-2">
                        <table class="table table-light table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kesulitan</th>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Akurasi</th>
                                    <th scope="col">Jumlah Benar</th>
                                    <th scope="col">Jumlah Soal</th>
                                    <th scope="col">Tanggal Pengerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($history as $data)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $data->difficultData['difficulty'] }}
                                        </td>
                                        <td>
                                            {{ $data['point'] }}
                                        </td>
                                        <td>
                                            {{ $data['accuracy'] }}%
                                        </td>
                                        <td>
                                            {{ $data['total_correct'] }}
                                        </td>
                                        <td>
                                            {{ $data['total_question'] }}
                                        </td>
                                        <td>
                                            {{ date_format($data['created_at']->setTimezone(new DateTimeZone('Asia/Jakarta')), "H:i:s d-m-Y") }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
