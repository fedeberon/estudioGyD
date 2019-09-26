<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EstudioGyD</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .background-image {
                background: url('/images/intro.jpg') no-repeat center center fixed;
                background-size: cover;
                height: 100vh;
                border-radius: 0px;
                margin: 0;
            }
            .container    {
                height: 300px;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron background-image">
            <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-4 mx-auto">
                    @if (Route::has('login'))
                        @auth
                        <a class="btn btn-success btn-lg btn-block" href="{{ url('/home') }}" role="button">Home</a>
                        @else
                        <a class="btn btn-success btn-lg btn-block" href="{{ route('login') }}">Iniciar sesi&oacute;n</a>

                        @if (Route::has('register'))
                        <a class="btn btn-success btn-lg btn-block" href="{{ route('register') }}">Registrarse</a>
                        @endif
                        @endauth
                    @endif
            </div>
            </div>
    </body>
</html>
