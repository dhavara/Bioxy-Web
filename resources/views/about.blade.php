@extends('layouts.app')

@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Tentang Kami</h1>
    </div>

    <br>

    <div class="main-body">
        <div class="card card-body bg-primary">
            <h3 class="text-light">Deskripsi Aplikasi Kami</h3>
            <h4 class="text-light text-justify">
                Bioxy adalah aplikasi yang bertujuan untuk mempelajari lebih banyak hal dari biologi terutama biologi kelas
                11. Aplikasi ini dapat membantu anda dengan memberikan banyak pertanyaan dari tingkat kesulitan yang
                berbeda-beda dan dari soal tersebut anda akan mempelajari kesalahan maupun mempelajari soal-soal baru yang
                ada.
            </h4>
        </div>

        <div class="card card-body bg-primary mt-3">
          <h3 class="text-light">Para Pembuat Aplikasi</h3>
          <hr>
            <div class="d-flex justify-content-center">
                @foreach ($admins as $data)
                    <div class="w-50 text-center card card-body bg-white @if(!$loop->first) ms-2 @endif @if(!$loop->last) me-2 @endif">
                        <div class="pb-5 mb-5">
                            <img id="about_img" src="@if ($data->user->detail['user_image'] == '') /img/null.png @else /img/user/{{ $data->user->detail['user_image'] }} @endif" height="120px" width="120px" />
                            @if (isset($data->user->detail['user_frame']))
                                <img id="about_frame" src="/img/frame/{{ $data->user->detail->frame['image_path'] }}"
                                    height="120px" width="120px" />
                            @endif
                        </div>
                        <hr>
                        <h4><a href="/profile/id={{$data->user->id}}">{{$data->user->name}}</a></h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
