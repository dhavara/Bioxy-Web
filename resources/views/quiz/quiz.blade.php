@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kuis') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container d-flex justify-content-between">
                            <h4>Poin: {{ $point }}</h4>
                            <h4>Soal ke-{{ $nomor }}</h4>
                            <h4>Nyawa: {{ $health }}</h4>
                        </div>

                        <div class="container d-flex justify-content-center">
                            <h2>{{ $soal['question'] }}</h2>                                
                        </div>

                        @if ($soal['soal_image'] != '')
                        <div class="container d-flex justify-content-center">
                            <img src="/img/soal/{{ $soal['soal_image'] }}" height="400px" width="400px" />
                        </div>
                        @endif

                        @php
                            $array = [
                                'correct' => $soal['answer_correct'],
                                '1' => $soal['answer_1'],
                                '2' => $soal['answer_2'],
                                '3' => $soal['answer_3'],
                                '4' => $soal['answer_4'],
                            ];
                            uksort($array, function () {
                                return rand() > rand();
                            });
                        @endphp
                        @php
                            $iteration = 1;
                        @endphp
                        @foreach ($array as $key => $answer)
                            @if ($iteration %2 == 1)
                                <div class="container d-flex justify-content-center">
                            @endif
                            @if ($key == 'correct')
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}" onclick="event.preventDefault();
                                    document.getElementById('correct-ans').submit();">{{ $answer }}</a>
                            @else
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}" onclick="event.preventDefault();
                                    document.getElementById('wrong-ans').submit();">{{ $answer }}</a>
                            @endif
                            @if ($iteration %2 == 0 || $iteration == 5)
                                </div>
                            @endif
                            @php
                                $iteration++;
                            @endphp
                        @endforeach

                        <form id="correct-ans" action="{{ route('check') }}" method="POST" class="d-none">
                            @csrf
                            <input type="hidden" id="correct" name="correct" value={{ true }}>
                            <input type="hidden" id="point" name="point" value={{ $point }}>
                            <input type="hidden" id="health" name="health" value={{ $health }}>
                            <input type="hidden" id="nomor" name="nomor" value={{ $nomor }}>
                            <input type="hidden" id="benar" name="benar" value={{ $benar }}>
                        </form>

                        <form id="wrong-ans" action="{{ route('check') }}" method="POST" class="d-none">
                            @csrf
                            <input type="hidden" id="correct" name="correct" value={{ false }}>
                            <input type="hidden" id="point" name="point" value={{ $point }}>
                            <input type="hidden" id="health" name="health" value={{ $health }}>
                            <input type="hidden" id="nomor" name="nomor" value={{ $nomor }}>
                            <input type="hidden" id="benar" name="benar" value={{ $benar }}>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
