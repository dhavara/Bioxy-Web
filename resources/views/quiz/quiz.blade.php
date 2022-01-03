@extends('layouts.app')

@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Kuis</h1>
    </div>

    <div class="main-body">
        @if (session('correct'))
            <div class="alert alert-success" role="alert">
                {{ session('correct') }}
            </div>
        @endif
        @if (session('wrong'))
            <div class="alert alert-danger" role="alert">
                {{ session('wrong') }}
            </div>
        @endif

        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card bg-primary text-white">

                    <div class="card-body">
                        <div class="container d-flex justify-content-center">
                            <h4></h4>
                            <h4>Soal {{ $nomor }}</h4>
                            <h4></h4>
                        </div>
                        <div class="container d-flex justify-content-between">
                            <h4>Poin: {{ $point }}</h4>
                            <h4 id="time">01:00</h4>
                            <h4>Nyawa: {{ $health }}</h4>
                        </div>

                        <div class="container d-flex justify-content-center">
                            <div class="fs-4">
                                @php
                                    $s = str_replace("\\n", '', $soal['question']);
                                    echo nl2br($s);
                                @endphp
                            </div>
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
                            @if ($iteration % 2 == 1)
                                <div class="container d-flex justify-content-center">
                            @endif
                            @if ($key == 'correct')
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}" onclick="event.preventDefault();
                                        document.getElementById('correct-ans').submit();">{{ $answer }}</a>
                            @else
                                <a class="w-50 btn btn-lg btn-dark mt-2 me-1 ms-1" href="{{ route('quiz') }}" onclick="event.preventDefault();
                                        document.getElementById('wrong-ans').submit();">{{ $answer }}</a>
                            @endif
                            @if ($iteration % 2 == 0 || $iteration == 5)
                    </div>
                    @endif
                    @php
                        $iteration++;
                    @endphp
                    @endforeach

                    <form id="correct-ans" action="{{ route('check') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" id="difficulty" name="difficulty" value={{ $difficulty }}>
                        <input type="hidden" id="correct" name="correct" value={{ true }}>
                        <input type="hidden" id="point" name="point" value={{ $point }}>
                        <input type="hidden" id="health" name="health" value={{ $health }}>
                        <input type="hidden" id="nomor" name="nomor" value={{ $nomor }}>
                        <input type="hidden" id="benar" name="benar" value={{ $benar }}>
                        <input type="hidden" id="timesup" name="timesup" value={{ false }}>
                    </form>

                    <form id="wrong-ans" action="{{ route('check') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" id="difficulty" name="difficulty" value={{ $difficulty }}>
                        <input type="hidden" id="correct" name="correct" value={{ false }}>
                        <input type="hidden" id="point" name="point" value={{ $point }}>
                        <input type="hidden" id="health" name="health" value={{ $health }}>
                        <input type="hidden" id="nomor" name="nomor" value={{ $nomor }}>
                        <input type="hidden" id="benar" name="benar" value={{ $benar }}>
                        <input type="hidden" id="timesup" name="timesup" value={{ false }}>
                    </form>

                    <form id="times-up" action="{{ route('check') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" id="difficulty" name="difficulty" value={{ $difficulty }}>
                        <input type="hidden" id="correct" name="correct" value={{ false }}>
                        <input type="hidden" id="point" name="point" value={{ $point }}>
                        <input type="hidden" id="health" name="health" value={{ $health }}>
                        <input type="hidden" id="nomor" name="nomor" value={{ $nomor }}>
                        <input type="hidden" id="benar" name="benar" value={{ $benar }}>
                        <input type="hidden" id="timesup" name="timesup" value={{ true }}>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/timer.js" charset="utf-8" type="text/javascript"></script>
@endsection
