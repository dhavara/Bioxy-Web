@extends('layouts.app')
@section('content')

    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Leaderboard</h1>
    </div>

    <div class="main-body">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="container">
            
            {{-- easy --}}
             <div class="row justify-content-center ms-2 me-2 d-none" id="easy">
                <h2 class="d-flex justify-content-center">Mudah</h2>
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
                                    <a href="/profile/id={{ $data->user['id'] }}" id="lb_name" @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
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
            
             {{-- medium --}}
             <div class="row justify-content-center ms-2 me-2 d-none" id="medium">
                <h2 class="d-flex justify-content-center">Sedang</h2>
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
                                    <a href="/profile/id={{ $data->user['id'] }}" id="lb_name" @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
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

            {{-- hard --}}
            <div class="row justify-content-center ms-2 me-2 d-none" id="hard">
                <h2 class="d-flex justify-content-center">Sulit</h2>
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
                                    <a href="/profile/id={{ $data->user['id'] }}" id="lb_name" @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
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

            {{-- vhard --}}
            <div class="row justify-content-center ms-2 me-2 d-none" id="vhard">
                <h2 class="d-flex justify-content-center">Sangat Sulit</h2>
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
                                    <a href="/profile/id={{ $data->user['id'] }}" id="lb_name" @if ($data->user->detail['user_color'] != '') style="color: {{ $data->user->detail->color['hex_code'] }}" @else style="color:#010101 @endif">
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

            <hr>
            <div class="d-flex justify-content-center">          
                <button class="btn btn-lg btn-dark ms-2 me-2 btn-leaderboard" onclick="easy()">Mudah</button>
                <button class="btn btn-lg btn-dark ms-2 me-2 w-10 btn-leaderboard" onclick="medium()">Sedang</button>
                <button class="btn btn-lg btn-dark ms-2 me-2 w-10 btn-leaderboard" onclick="hard()">Sulit</button>
                <button class="btn btn-lg btn-dark ms-2 me-2 w-10 btn-leaderboard" onclick="vhard()">Sangat Sulit</button>
            </div>

        </div>
    </div>
</div>

<script>
    function easy() {
      document.getElementById("easy").classList.remove("d-none");
      document.getElementById("medium").classList.add("d-none");
      document.getElementById("hard").classList.add("d-none");
      document.getElementById("vhard").classList.add("d-none");
    }
    function medium() {
      document.getElementById("easy").classList.add("d-none");
      document.getElementById("medium").classList.remove("d-none");
      document.getElementById("hard").classList.add("d-none");
      document.getElementById("vhard").classList.add("d-none");
    }
    function hard() {
      document.getElementById("easy").classList.add("d-none");
      document.getElementById("medium").classList.add("d-none");
      document.getElementById("hard").classList.remove("d-none");
      document.getElementById("vhard").classList.add("d-none");
    }
    function vhard() {
      document.getElementById("easy").classList.add("d-none");
      document.getElementById("medium").classList.add("d-none");
      document.getElementById("hard").classList.add("d-none");
      document.getElementById("vhard").classList.remove("d-none");
    }
</script>
    

@endsection
