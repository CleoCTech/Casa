<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Khand:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    
    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        .loading-div{
            text-align:center;
            position: absolute;
            left: 50%;
            top: 40%;
            transform: translate(-50%, -50%);
        }
    </style>
    @yield('styles')
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" style="color:balck" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:black" href="">Shop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:black" href="/">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black" href="/">Jewerly Tips</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color:black" href="/">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color:black" href="/">Durability</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color:black" href="/">Contact</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  /storage/images/logo2.png--}}
            <header class="header-area fixed-top"><div class="container"><div class="row"><div class="col-sm-12"><div class="logo">
                <a href="/"><img class="img-fluid" src="/storage/images/logo2.png" alt="logo"></a><div class="fright"><div class="social des-social"><ul><li><a class="catt" href="/template/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>0</span></a></li></ul></div></div></div></div></div><div class="row"><div class="col-12"><nav class="navbar navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button><div class="mobi-social social"><ul><li><a class="catt" href="/template/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>0</span></a></li></ul></div><div class="collapse navbar-collapse" id="navbarTogglerDemo03"><ul class="navbar-nav mr-auto"><li class="nav-item active"><a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link " href="/shop">SHOP</a></li><li class="nav-item"><a class="nav-link " href="/collecties">COLLECTIES</a></li><li class="nav-item"><a class="nav-link " href="/sieraden-tips">SIERADEN TIPS</a></li><li class="nav-item"><a class="nav-link " href="/over-casa">OVER CASA</a></li><li class="nav-item"><a class="nav-link " href="/duurzaamheid">DUURZAAMHEID</a></li><li class="nav-item"><a class="nav-link " href="/contact">CONTACT</a></li></ul></div></nav></div></div></div></header>
        <div id="header-spacer"></div>
        <main class="py-4">
            @yield('content')
            <div class="loading-div" id="is_loading"><img src="/storage/images/loading.gif"></div>
        </main>
       
        <div>
            <footer-area></footer-area>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
