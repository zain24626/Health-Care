<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="/MyCss/navbar.css">
    <link rel="stylesheet" href="/MyCss/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div id="app">

        <div class="navbarbody">

            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/logo/HEALTH CARE.png" id="logo" alt="">
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="row w-100" id="navbar">
                            <div class="collapse navbar-collapse " id="collapsibleNavId">

                                <ul class="navbar-nav m-auto mt-2 mt-lg-0 w-100  justify-content-center ">
                                    <div class="" id="navbarLinks">

                                        <li class="nav-item li hoverable"> <a class="nav-link  link" id="len1"
                                                href="/">Home</a> </li>
                                        <li class="nav-item li hoverable"> <a class="nav-link  link" id="len4"
                                                href="/news">News</a> </li>
                                        {{-- </div> --}}

                                        {{-- <div class="" id="navbarLinks"> --}}

                                        <li class="nav-item li hoverable"> <a class="nav-link  link" id="len2"
                                                href="/about">About</a> </li>
                                        <li class="nav-item li hoverable"> <a class="nav-link  link" id="len3"
                                                href="/contact">Contact</a> </li>
                                        <li class="nav-item li hoverable"> <a class="nav-link  link" id="len4"
                                                href="/dashboard">Admin Dashboard</a> </li>

                                    </div>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        @auth
                            <form action="{{ route('logout') }}" method="POST" class="">
                                <a href="{{ route('logout') }}" id="anchor"> <button id="button"
                                        type="submit">Logout</button> </a>

                                {{-- <a href=""> <button id="" type="submit">Logout</button></a> --}}
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('register') }}" id="anchor"> <button id="button" type="submit">Sign
                                    Up</button> </a>
                            <a href="{{ route('login') }}" id="anchor"> <button id="button" type="submit">Sign In</button></a>
                        @endauth
                    </div>
                </div>
            </nav>

        </div>


        <style>
            #button {
                display: inline-block;
                border-radius: 30px;
                background-color: #fff;
                border: none;
                color: #fc5130;
                text-align: center;
                font-size: 15px;
                padding-left: 10px;
                /* width: 185px; */
                transition: all 0.5s;
                cursor: pointer;
                margin-top: 13px;
                /* border-top: 2px solid #fc5130; */
                border-bottom: 2px solid #fc5130;
                font-family: italic;
            }

            #button:hover {
                color: rgb(114, 114, 240);
                /* border-top: 2px solid rgb(114, 114, 240); */
                border-bottom: 2px solid rgb(114, 114, 240);
            }
        </style>

        {{-- @include('Messages') --}}




        <script>
            $(document).ready(function() {


                if ($(window).width() < 600) {

                    $("#logo").css("width", "40%");
                    $("#navbar").css("margin-left", "40px");
                    $('#navbarLinks').addclass('d-flex');


                } else {
                    $("#logo").css("width", "85%");
                    $("#navbar").css("margin-left", "0px");
                    $('#navbarLinks').removeclass('d-flex');

                }

            })

            $(window).resize(function() {

                if ($(window).width() < 600) {

                    $("#logo").css("width", "40%");
                    $("#navbar").css("margin-left", "40px");
                    $('#navbarLinks').addclass('d-flex');


                } else {
                    $("#logo").css("width", "85%");
                    $("#navbar").css("margin-left", "0px");
                    $('#navbarLinks').removeclass('d-flex');



                }


            })
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>




        <script>
            $(function() {
                var str = '#len'; //increment by 1 up to 1-nelemnts
                $(document).ready(function() {
                    var i, stop;
                    i = 1;
                    stop = 5; //num elements
                    setInterval(function() {
                        if (i > stop) {
                            return;
                        }
                        $(str + (i++)).toggleClass('bounce');
                    }, 500)
                });
            });
        </script>




        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000,
            offset: 0,
            once: true
        });
    </script>
</body>

</html>
