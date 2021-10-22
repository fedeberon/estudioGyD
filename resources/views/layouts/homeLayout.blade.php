<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EstudioG&D</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/css/fonts.css" type="text/css" rel="stylesheet">
    <link href="/css/all.css" type="text/css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125792456-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125792456-1');
    </script>

    <style>
        html, body {
            background-color: #191c2f;
        }

        .icon{
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container col-md-12 bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="row">
            <div class="col-md-12 d-none d-md-block">
                <div class="col-md-12 float-left montserrat300"><p>Servicio de Ingenieria digital para el desarrollo productivo</p></div>
            </div>
            <div class="col-md-12 d-flex justify-content-around">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="navbar-nav barlow600">
                            <li class="nav-item active pr-2">
                                <a class="btn btn-light" href="/">INICIO</a>
                            </li>

                            @if(Auth::user()->role_id != '2')
                            <li class="nav-item active pr-2">
                                <a class="btn btn-light" href="#" data-toggle="modal" role="button" data-target="#subscribirseAPremium">SUSCRIBIRSE A PREMIUM</a>
                            </li>
                            @endif

                            <li class="nav-item active pr-2">
                                @if(Auth::user()->role_id != '3')
                                <a class="btn btn-light" href="/soporte" class="nav-link">SOPORTE TECNICO</a>
                                @endif
                            </li>

                            <li class="nav-item active pr-2">
                                <a class="btn btn-light" href="/newsletter">NEWSLETTER</a>
                            </li>

                            <li class="nav-item active pr-2">
                                <a class="btn btn-light" href="/terminosCondiciones" target="_blank">TERMINOS Y CONDICIONES</a>
                            </li>

                            <li class="nav-item dropdown pr-2">
                                <a class="btn btn-light text-uppercase dropdown-toggle" href="#" title="Plataforma Web" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i> ACCESO
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @guest
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                                    @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    @endif
                                    @else
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
    </nav>
</div>

<main class="py-5">
    @yield('content')
</main>

<div class="modal fade" id="subscribirseAPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><span class="badge badge-warning">Suscribete a nuestro servicio premium</span></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h4><span class="badge badge-success">Ventajas del servicio premium</span></h4>
                <ul>
                <li>
                    El Abono mensual m&aacute;s bajo del mercado
                    </li>

                    <li>
                    Acceso sin restricción de superficie
                    </li>

                    <li>
                    Sin l&iacute;mites de consultas 
                    </li>

                    <li>
                    Permite guardar los lotes marcados
                    </li>

                    <li>
                    Permite asociar a cada lote su nombre, el cultivo y una descripci&oacute;n
                    </li>

                    <li>
                    Soporte t&eacute;cnico 7x24
                    </li>

                    <li>
                    Personalizaci&oacute;n del acceso
                    </li>
                    
                    <li>
                    Importante bonificaci&oacute;n por paquete de usuarios
                    </li>
                </ul>

                <div class="d-flex justify-content-center modal-footer">
                    <a href="/cotizacion" class="btn btn-success">Solicitar cotizaci&oacute;n</a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="row modal-body justify-content-center">
                <img src="images/qrcode.png" style="width: 70%" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container navbar-fixed-bottom col-md-12 bg-white py-4">
    <div class="row">

        <div class="col-md-12">
            <div class="d-flex justify-content-left">
                <div class="icon">
                    <a class="navbar-link text-primary pr-5 tetx-left pl-5" href="http://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="icon">
                    <a class="navbar-link text-danger pr-5 tetx-left" href="http://www.youtube.com/user/estudiogyd" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="icon">
                    <a class="navbar-link text-secondary pr-5 tetx-left" href="https://www.linkedin.com/in/mariano-delbuono-b95b1b22/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="icon">
                    <a href="#" class="navbar-link text-dark text-right" data-toggle="modal" data-target="#contactoModal"><i class="fas fa-qrcode"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 pl-6">
            <div class="pt-3 pb-3">
                <div>
                    <img src="\images\general\logo-footer.png" width="170px" height="70px">
                </div>
            </div>
        </div>

        <div class="col-md-3 pt-4">
            <div>
                <a class="text-secondary" href="https://web.whatsapp.com/send?phone=5492494697996&amp;text=Hola, necesito hacerles una consulta..." target="_blank"><i class="fab fa-whatsapp"></i> +5492494697996</a>
            </div>
        </div>

        <div class="col-md-3 pt-4">
            <div>
                <a href="mailto:info@estudiogyd.com.ar" class="text-secondary"><i class="far fa-envelope"></i> info@estudiogyd.com.ar </a>
            </div>
        </div>

        <div class="col-md-3 pt-4 d-none d-md-block">
            <div>
                <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Av. Avellaneda 351,<br>B7000 Tandil, Buenos Aires </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
