@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pilih Kesulitan') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($difficulty as $d)
                            <div class="container d-flex justify-content-center">
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}" onclick="event.preventDefault();
                                    document.getElementById('{{ $d['difficulty'] }}').submit();"><b>{{ $d['difficulty'] }}</b> ({{ $d['health'] }} nyawa)</a>
                            </div>
                            <form id="{{ $d['difficulty'] }}" action="{{ route('check') }}" method="POST" class="d-none">
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
