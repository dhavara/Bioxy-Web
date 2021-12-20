@extends('layouts.app')

@section('content')

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

    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Toko</h1>
    </div>

    <div class="container d-flex justify-content-between">
        <h3>Gelar</h3>
    </div>
    <hr>
    <div id="carouselTitle" class="carousel-fade carousel carousel-dark slide d-flex justify-content-center ps-5 pe-5"
        data-bs-interval="false">
        @if (sizeof($titles) > 0)
        
        <div class="carousel-title carousel-inner ms-5 me-5">
            @foreach ($titles as $title)
            <div class="carousel-item @if ($loop->index == 0) active @endif d-flex justify-content-center">
                <div class="card w-50 me-1 ms-1">
                    <div class="card-body text-center">
                        <h5>{{ $title['title'] }}</h5>
                        <p>Harga: {{ $title['price'] }} Poin</p>
                        <hr>
                        <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                        document.getElementById('{{ $title['title'] }}').submit();">Beli</a>
                    </div>
                </div>
            </div>

            <form id="{{ $title['title'] }}" action="{{ route('purchase') }}" method="POST" class="d-none">
                @csrf
                <input type="hidden" id="type" name="type" value="title">
                <input type="hidden" id="id" name="id" value="{{ $title['id'] }}">
            </form>

            @endforeach
        </div>
        <button class="carousel-control-prev pe-5" type="button" data-bs-target="#carouselTitle" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next ps-5" type="button" data-bs-target="#carouselTitle" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>
    <br>

    <div class="container">
        <h3>Bingkai</h3>
    </div>
    <hr>
    <div id="carouselFrame" class="carousel-fade carousel carousel-dark slide d-flex justify-content-center ps-5 pe-5"
        data-bs-interval="false">
        @if (sizeof($frames) > 0)
        <div class="carousel-frame carousel-inner ms-5 me-5">
            @foreach ($frames as $frame)
            <div class="carousel-item @if ($loop->index == 0) active @endif d-flex justify-content-center">
                <div class="card w-50 me-1 ms-1">
                    <div class="card-body text-center">
                        <h5>{{ $frame['name'] }}</h5>
                        <img src="img/frame/{{ $frame['image_path'] }}" />
                        <p>Harga: {{ $frame['price'] }} Poin</p>
                        <hr>
                        <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                        document.getElementById('{{ $frame['name'] }}').submit();">Beli</a>
                    </div>
                </div>
            </div>

            <form id="{{ $frame['name'] }}" action="{{ route('purchase') }}" method="POST" class="d-none">
                @csrf
                <input type="hidden" id="type" name="type" value="frame">
                <input type="hidden" id="id" name="id" value="{{ $frame['id'] }}">
            </form>

            @endforeach
        </div>
        <button class="carousel-control-prev pe-5" type="button" data-bs-target="#carouselFrame" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next ps-5" type="button" data-bs-target="#carouselFrame" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>
    <br>

    <div class="container">
        <h3>Warna Username</h3>
    </div>
    <hr>
    <div id="carouselColor" class="carousel-fade carousel carousel-dark slide d-flex justify-content-center ps-5 pe-5"
        data-bs-interval="false">
        @if (sizeof($colors) > 0)
        <div class="carousel-color carousel-inner ms-5 me-5">
            @foreach ($colors as $color)
            <div class="carousel-item @if ($loop->index == 0) active @endif d-flex justify-content-center">
                <div class="card w-50 me-1 ms-1">
                    <div class="card-body text-center">
                        <span class="color-dot" style="background-color: {{ $color['hex_code'] }}"></span>
                        <h5>{{ $color['name'] }}</h5>
                        <p>Harga: {{ $color['price'] }} Poin</p>
                        <hr>
                        <a class="btn btn-lg btn-dark" href="" onclick="event.preventDefault();
                        document.getElementById('{{ $color['name'] }}').submit();">Beli</a>
                    </div>
                </div>
            </div>

            <form id="{{ $color['name'] }}" action="{{ route('purchase') }}" method="POST" class="d-none">
                @csrf
                <input type="hidden" id="type" name="type" value="color">
                <input type="hidden" id="id" name="id" value="{{ $color['id'] }}">
            </form>
            
            @endforeach
        </div>
        <button class="carousel-control-prev pe-5" type="button" data-bs-target="#carouselColor" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next ps-5" type="button" data-bs-target="#carouselColor" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>

    <script>
        let itemsTitle = document.querySelectorAll('.carousel .carousel-title .carousel-item')
        let itemsFrame = document.querySelectorAll('.carousel .carousel-frame .carousel-item')
        let itemsColor = document.querySelectorAll('.carousel .carousel-color .carousel-item')

        itemsTitle.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 0; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = itemsTitle[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        itemsFrame.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 0; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = itemsFrame[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        itemsColor.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 0; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = itemsColor[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    <script type="text/javascript">
      function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
    </script>

@endsection
