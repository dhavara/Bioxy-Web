@extends('layouts.app')

@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Kuis</h1>
    </div>

    <div class="main-body">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center">
                            Pilih Kesulitan
                        </h4>
                        @foreach ($difficulty as $d)
                            <div class="container d-flex justify-content-center">
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('{{ $d['difficulty'] }}').submit();"><b>{{ $d['difficulty'] }}</b> ({{ $d['health'] }} nyawa)</a>
                            </div>
                            <form id="{{ $d['difficulty'] }}" action="{{ route('check') }}" method="POST"
                                class="d-none">
                                @csrf
                                <input type="hidden" id="difficulty" name="difficulty" value="{{ $d['difficulty'] }}">
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
