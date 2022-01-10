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
    
    <link href="style.css?v=<?php echo time();?>" rel="stylesheet" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
    referrerpolicy="no-referrer" /></head>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-primary bg-secondary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
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
