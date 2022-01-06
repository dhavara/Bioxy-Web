<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("layouts.navigation")
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bioxy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
    referrerpolicy="no-referrer" /></head>
    <style>

    body {
        font-family: 'Noto Sans', sans-serif;
        margin: 0;
        overflow-x: hidden;
        padding-top:40px;
    }

    .timeline-page {
    padding: 10px 0;
    position: relative;
    margin-top: 35px;
    }

    .timeline-page::after {
        content: "";
        height: 95%;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 1px;
        background-color: #e8e8e8;
    }

    .timeline-item {
        margin-bottom: 80px;
    }

    .timeline-page .timeline-item .date-label-left {
        text-align: center;
        margin-right: 20px;
        position: relative;
    }

    .timeline-page .timeline-item .date-label-left::after,
    .timeline-page .timeline-item .duration-right::after {
        border: 3px solid rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        content: "";
        height: 20px;
        position: absolute;
        top: 20px;
        width: 20px;
        z-index: 1;
    }

    .timeline-page .timeline-item .date-label-left::after {
        right: -45px;
    }

    .timeline-page .timeline-item .duration-right::after {
        left: -45px;
    }

    .timeline-page .timeline-item .works-description-right {
        text-align: left;
        margin-left: 15px;
        float: left;
        border-radius: 0;
        padding: 20px 0;
    }

    .timeline-page .timeline-item .duration-right {
        text-align: center;
        margin-left: 20px;
        position: relative;
    }

    .timeline-page .timeline-item .works-description-left {
        text-align: right;
        margin-right: 15px;
        float: right;
        border-radius: 0;
        padding: 20px 0;
    }

    .timeline-page h4,
    .works-description-left h4 {
        font-size: 18px;
        margin-top: 0;
        text-transform: capitalize;
    }

    .timeline-subtitle {
        line-height: 26px;
        color: #666;
    }

    .bg-custom, .btn-custom, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .back-to-top:hover {
        background-color: #f6576e;
    }

    .message-box h1 {
        color: #252932;
        font-size: 100px;
        font-weight: 700;
        line-height: 98px;
        text-shadow: rgba(61, 61, 61, 0.3) 1px 1px, rgba(61, 61, 61, 0.2) 2px 2px, rgba(61, 61, 61, 0.3) 3px 3px;
    }

    .panel {
  box-shadow: 0 2px 0 rgba(0,0,0,0.05);
  border-radius: 0;
  border: 0;
  margin-bottom: 24px;
}

.panel-dark.panel-colorful {
  background-color: #3b4146;
  border-color: #3b4146;
  color: #fff;
}

.panel-danger.panel-colorful {
  background-color: #f76c51;
  border-color: #f76c51;
  color: #fff;
}

.panel-primary.panel-colorful {
  background-color: #5fa2dd;
  border-color: #5fa2dd;
  color: #fff;
}

.panel-info.panel-colorful {
  background-color: #4ebcda;
  border-color: #4ebcda;
  color: #fff;
}

.panel-body {
  padding: 25px 20px;
}

.panel hr {
  border-color: rgba(0,0,0,0.1);
}

.mar-btm {
  margin-bottom: 15px;
}

h2, .h2 {
  font-size: 28px;
}

.small, small {
  font-size: 85%;
}

.text-sm {
  font-size: .9em;
}

.text-thin {
  font-weight: 300;
}

.text-semibold {
  font-weight: 600;
}

.bg-text {
    color: white;
}
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-primary bg-secondary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Bioxy') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        @else
                        @if (Auth::user()->roles->firstWhere("role_id", 1) != null)
                            <li class="nav-item">
                                <a class="nav-link {{ $active_quiz ?? '' }}" href="{{ route('quiz') }}">Kuis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $active_shop ?? '' }}" href="{{ route('shop') }}">Toko</a>
                            </li>
                        @endif
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link {{ $active_leaderboard ?? '' }}" href="{{ route('leaderboard') }}">Leaderboard</a>
                        </li>
                        @guest
                        @else
                        @if (Auth::user()->roles->firstWhere("role_id", 2) != null)
                            <li class="nav-item">
                                <a class="nav-link {{ $active_dashboard ?? '' }}" href="{{ route('user.index') }}">Dashboard</a>
                            </li>
                        @endif
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav-disabled text-primary">Total Poin: {{ Auth::user()->detail['point'] }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="profile-form" action="{{ route('profile') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 pt-5 mt-3 pb-5 mb-3">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Boostrap 5
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
    {{-- DataTables --}}
    <link type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{-- Boostrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- DataTables --}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <script>
        $(document).ready(function() {
            var thetable = $('.table-default').DataTable({});
        });
        $(document).ready(function() {
            var thetable = $('.table-profile').DataTable({         
                "aoColumns": [
                    { "sWidth": '5%' },
                    { "sWidth": '30%' },
                    { "sWidth": '5%' },
                    { "sWidth": '5%' },
                    { "sWidth": '5%' },
                    { "sWidth": '5%' },
                    { "sWidth": '45%' },
                ],
                "bAutoWidth": false,
            });
        });
        $(document).ready(function() {
            var thetable2 = $('.table-leaderboard').DataTable({
                lengthMenu: 10,
                "bLengthChange": false,
                "bPaginate": false,
                "info": false,
                "aaSorting": [[0, "asc"]],         
                "aoColumns": [
                    { "bSortable": false, "sWidth": '10%' },
                    { "bSortable": false, "sWidth": '40%' },
                    { "bSortable": false, "sWidth": '10%' },
                    { "bSortable": false, "sWidth": '40%' },
                ],
                "bAutoWidth": false,
                "language": {
                    "emptyTable": "Data ini masih kosong"
                }
            });
        });
        $(document).ready(function(){
            $('.slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
                dots: true,
                prevArrow: '<span class="slick-prev" aria-hidden="true"></span>',
                nextArrow: '<span class="slick-next" aria-hidden="true"></span>',
            });
        });
    </script>
</body>
</html>
