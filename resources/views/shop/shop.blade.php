@extends('layouts.app')

@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Toko</h1>
    </div>

    @if (session('fail'))
        <div class="alert alert-danger alert-dismissable custom-danger-box" style="margin: 15px;">
            <strong> {{ session('fail') }} </strong>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
            <strong> {{ session('success') }} </strong>
        </div>
    @endif

    <div class="container pt-5">
        <div class="card bg-primary">
            <div class="fs-4 ms-3 mt-3">
                <h3 class="text-white">Gelar</h3>
            </div>
            <hr>
            <div class="slider text-secondary">
                @foreach ($titles as $title)
                    <div class="d-flex justify-content-center">
                        <div class="card me-1 ms-1 w-100">
                            <div class="card-body text-center">
                                <h5>{{ $title['title'] }}</h5>
                                <p>Harga: {{ $title['price'] }} Poin</p>
                                <hr>
                                <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                            document.getElementById('{{ $title['title'] }}').submit();">Beli</a>
                            </div>
                            <form id="{{ $title['title'] }}" action="{{ route('purchase') }}" method="POST"
                                class="d-none">
                                @csrf
                                <input type="hidden" id="type" name="type" value="title">
                                <input type="hidden" id="id" name="id" value="{{ $title['id'] }}">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <div class="card bg-primary">
            <div class="fs-4 ms-3 mt-3">
                <h3 class="text-white">Bingkai</h3>
            </div>
            <hr>
            <div class="slider text-secondary">
                @foreach ($frames as $frame)
                    <div class="d-flex justify-content-center">
                        <div class="card me-1 ms-1 w-100">
                            <div class="card-body text-center">
                                <h5>{{ $frame['name'] }}</h5>
                                <div class="d-flex justify-content-center">
                                    <img src="img/frame/{{ $frame['image_path'] }}" height="150px" width="150px" />
                                </div>
                                <p>Harga: {{ $frame['price'] }} Poin</p>
                                <hr>
                                <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                            document.getElementById('{{ $frame['name'] }}').submit();">Beli</a>
                            </div>
                            <form id="{{ $frame['name'] }}" action="{{ route('purchase') }}" method="POST"
                                class="d-none">
                                @csrf
                                <input type="hidden" id="type" name="type" value="frame">
                                <input type="hidden" id="id" name="id" value="{{ $frame['id'] }}">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <div class="card bg-primary">
            <div class="fs-4 ms-3 mt-3">
                <h3 class="text-white">Warna Pengguna</h3>
            </div>
            <hr>
            <div class="slider text-secondary">
                @foreach ($colors as $color)
                    <div class="d-flex justify-content-center">
                        <div class="card me-1 ms-1 w-100">
                            <div class="card-body text-center">
                                <span class="color-dot" style="background-color: {{ $color['hex_code'] }}"></span>
                                <h5>{{ $color['name'] }}</h5>
                                <p>Harga: {{ $color['price'] }} Poin</p>
                                <hr>
                                <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                            document.getElementById('{{ $color['name'] }}').submit();">Beli</a>
                            </div>
                            <form id="{{ $color['name'] }}" action="{{ route('purchase') }}" method="POST"
                                class="d-none">
                                @csrf
                                <input type="hidden" id="type" name="type" value="color">
                                <input type="hidden" id="id" name="id" value="{{ $color['id'] }}">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
