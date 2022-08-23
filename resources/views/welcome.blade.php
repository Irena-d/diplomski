<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doggos-app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body class="antialiased">
   {{--  <div class="login-register">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}


    <div class="container">

        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="login-register">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/home') }}" class="log-reg">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="log-reg">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="log-reg">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h1 class="title"> DOGGOS APP </h1>
            </div>
            <div class="col-6">

            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h1 class="all-you-need"> All you need to know
                    about your pet on one place </h1>
            </div>
            <div class="col-6">

            </div>
        </div>

        <div class="row">

        </div>

        <div class="row">

        </div>

    </div>

</body>

</html>
