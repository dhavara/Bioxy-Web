@extends('layouts.app')
@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Leaderboard</h1>
    </div>

    <div class="main-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="pt-5">
            <div class="card bg-primary">
                <div class="d-flex justify-content-center pt-2 pb-2">
                    <button class="btn btn-lg btn-dark btn-leaderboard ms-2 me-2" id="btn-easy" onclick="easy()">Mudah</button>
                    <button class="btn btn-lg btn-dark w-10 btn-leaderboard ms-2 me-2" id="btn-medium" onclick="medium()">Sedang</button>
                    <button class="btn btn-lg btn-dark w-10 btn-leaderboard ms-2 me-2" id="btn-hard" onclick="hard()">Sulit</button>
                    <button class="btn btn-lg btn-dark w-10 btn-leaderboard ms-2 me-2" id="btn-vhard" onclick="vhard()">Sangat Sulit</button>
                </div>
            </div>
        </div>

        <div class="container">

            {{-- easy --}}
            <div class="row justify-content-center d-none" id="easy">
                <div class="card bg-primary">
                    <div class="fs-4 ms-3 mt-3">
                        <h3 class="text-white">Mudah</h3>
                    </div>
                    <hr>
                    <table class="table table-light table-leaderboard">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Tanggal Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($easy as $data)
                                <tr>
                                    <td>
                                        <b>{{ $loop->iteration }}</b>
                                    </td>
                                    <td>
                                        <a href="/profile/id={{ $data->user['id'] }}" id="lb_name"
                                            @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
                                            {{ $data->user['username'] }}
                                        </a>
                                        <br>
                                        <b>{{ $data->user->detail->title['title'] }}</b>
                                    </td>
                                    <td>
                                        {{ $data['point'] }}
                                    </td>
                                    <td>
                                        {{ date_format($data['created_at']->setTimezone(new DateTimeZone('Asia/Jakarta')), 'H:i:s d-m-Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- medium --}}
            <div class="row justify-content-center d-none" id="medium">
                <div class="card bg-primary">
                    <div class="fs-4 ms-3 mt-3">
                        <h3 class="text-white">Sedang</h3>
                    </div>
                    <hr>
                    <table class="table table-light table-leaderboard">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Tanggal Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medium as $data)
                                <tr>
                                    <td>
                                        <b>{{ $loop->iteration }}</b>
                                    </td>
                                    <td>
                                        <a href="/profile/id={{ $data->user['id'] }}" id="lb_name"
                                            @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
                                            {{ $data->user['username'] }}
                                        </a>
                                        <br>
                                        <b>{{ $data->user->detail->title['title'] }}</b>
                                    </td>
                                    <td>
                                        {{ $data['point'] }}
                                    </td>
                                    <td>
                                        {{ date_format($data['created_at']->setTimezone(new DateTimeZone('Asia/Jakarta')), 'H:i:s d-m-Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- hard --}}
            <div class="row justify-content-center d-none" id="hard">
                <div class="card bg-primary">
                    <div class="fs-4 ms-3 mt-3">
                        <h3 class="text-white">Sulit</h3>
                    </div>
                    <hr>
                    <table class="table table-light table-leaderboard">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Tanggal Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hard as $data)
                                <tr>
                                    <td>
                                        <b>{{ $loop->iteration }}</b>
                                    </td>
                                    <td>
                                        <a href="/profile/id={{ $data->user['id'] }}" id="lb_name"
                                            @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
                                            {{ $data->user['username'] }}
                                        </a>
                                        <br>
                                        <b>{{ $data->user->detail->title['title'] }}</b>
                                    </td>
                                    <td>
                                        {{ $data['point'] }}
                                    </td>
                                    <td>
                                        {{ date_format($data['created_at']->setTimezone(new DateTimeZone('Asia/Jakarta')), 'H:i:s d-m-Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- vhard --}}
            <div class="row justify-content-center d-none" id="vhard">
                <div class="card bg-primary">
                    <div class="fs-4 ms-3 mt-3">
                        <h3 class="text-white">Sangat Sulit</h3>
                    </div>
                    <hr>
                    <table class="table table-light table-leaderboard">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Skor</th>
                                <th scope="col">Tanggal Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vhard as $data)
                                <tr>
                                    <td>
                                        <b>{{ $loop->iteration }}</b>
                                    </td>
                                    <td>
                                        <a href="/profile/id={{ $data->user['id'] }}" id="lb_name"
                                            @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
                                            {{ $data->user['username'] }}
                                        </a>
                                        <br>
                                        <b>{{ $data->user->detail->title['title'] }}</b>
                                    </td>
                                    <td>
                                        {{ $data['point'] }}
                                    </td>
                                    <td>
                                        {{ date_format($data['created_at']->setTimezone(new DateTimeZone('Asia/Jakarta')), 'H:i:s d-m-Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/leaderboard.js" charset="utf-8" type="text/javascript"></script>

@endsection
