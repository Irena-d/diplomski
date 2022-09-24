<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Doggos') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/myapp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{asset('/images/icon.png')}}">



</head>
<body>
    <div id="app">
        <nav id="lala" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container mm">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Doggos') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="dropdown">
                            <button class="dropbtn">
                            <a href="{{ route('home.index') }}" class="menuu">Home</a>
                            </button>
                        </li>
                        {{-- products --}}
                        <li class="dropdown">
                            <button class="dropbtn menuu">Products
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('products.food') }}">Food</a>
                                <a href="{{ route('products.toys') }}">Toys</a>
                                <a href="{{ route('products.other') }}">Other</a>
                            </div>
                          </li>
                        {{-- services --}}
                        <li class="dropdown">
                            <button class="dropbtn menuu">Services
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('services.breeders') }}"> Dog Breeders</a>
                                <a href="{{ route('services.vets') }}"> Vets </a>
                                <a href="{{ route('services.groomers') }}"> Groomers </a>
                                <a href="{{ route('services.walkers') }}"> Walkers & Keepers </a>
                                <a href="{{ route('services.educators') }}"> Educators </a>
                                <a href="{{ route('services.welfare') }}"> Dog welfare </a>
                            </div>
                          </li>
                        {{-- contact --}}
                        <li class="dropdown">
                            <button class="dropbtn">
                            <a href="{{ route('home.contact') }}" class="menuu">Contact</a>
                            </button>
                        </li>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
