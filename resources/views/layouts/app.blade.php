<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            background-color: #383838;
            color: #000000;
            font-family: 'Nunito', sans-serif;
        }
        .background-image {
            background: url('/images/home-background.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            border-radius: 0px;
            margin: 0;
        }
    </style>

</head>
<body>
    <div id="app" class="background-image">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('APP_NAME', 'EstudioGyD') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif

                        @else

                        @if(Auth::user()->role_id != '2')
                        <li class="nav-item">
                            <a href="#" class="btn btn-warning" data-toggle="modal" role="button" data-target="#subscribirseAPremium" >Subscribirse a Premium</a>
                        </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="/terminosCondiciones" target="_blank">Terminos y condiciones</a>
                        </li>

                        @if(Auth::user()->role_id != '3')
                        <li class="nav-item">
                            <a href="/soporte" class="nav-link">Soporte tecnico</a>
                        </li>
                        @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

                <div class="modal fade" id="subscribirseAPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLabel"><span class="badge badge-warning">Subscribete a nuestro servicio premium</span></h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <h4><span class="badge badge-success">Ventajas del servicio premium</span></h4>
                                <ul>
                                    <li>
                                        Acceso sin restricciones de Superficie
                                    </li>

                                    <li>
                                        Sin limitaci&oacute;n de cantidad de consultas
                                    </li>

                                    <li>
                                        Por el mismo costo, se brinda el acceso a dos usuarios
                                    </li>

                                    <li>
                                        Importantes bonificaciones por paquetes de usuarios
                                    </li>

                                    <li>
                                        Soporte t&eacute;cnico 24/7
                                    </li>

                                    <li>
                                        Personalizaci&oacute;n del acceso
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-center modal-footer">
                                    <a href="/cotizacion" class="btn btn-success">M&aacute;s informaci&oacute;n</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
