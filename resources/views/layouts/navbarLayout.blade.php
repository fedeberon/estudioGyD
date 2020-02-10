
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EstudioG&D</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/css/fonts.css" type="text/css" rel="stylesheet">
    <link href="/css/all.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container col-md-12 bg-nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="row">
                <div class="col-md-12 d-none d-md-block">
                    <div class="col-md-5 float-left montserrat300"><p>Servicio de Ingenieria digital para el desarrollo productivo</p></div>

                    <div class="col-md-7 float-right">
                        <ul class="navbar-nav float-right">
                            <li class="nav-item pr-4">
                                <a class="btn btn-light" href="https://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook"></i> SEGUINOS</a>
                            </li>

                            <li class="nav-item pr-4">
                                <a class="btn btn-light d-none d-md-block" href="https://web.whatsapp.com/send?phone=5492494697996&amp;text=Hola, necesito hacerles una consulta..." target="_blank"><i class="fab fa-whatsapp"></i> +549 249 4697996</a>
                            </li>

                            <li class="nav-item">
                                <a href="mailto:info@estudiogyd.com.ar" class="nav-item nav-link"><i class="fas fa-envelope"></i> info@estudiogyd.com.ar</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 d-flex align-self-center d-none d-sm-block d-md-none">
                    <div class="col-md-6">
                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-light" href="http://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook"></i></a>

                        <a class="btn btn-light" href="https://wa.me/5492494697996?text=Hola,%20necesito%20hacerles%20una%20consulta..." target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-around">
                    <div class="row">

                        <div class="col-md-4 rounded-circle navbar logo">
                            <img src="\maquetacion\general\logo-top.png" height="145" width="145">
                        </div>

                        <div class="col-md-7 collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mt-6 barlow600">
                                <li class="nav-item active pr-2">
                                    <a class="btn btn-light" href="/">INICIO</a>
                                </li>

                                <li class="nav-item dropdown pr-2">
                                    <a class="btn btn-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SERVICIOS
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/agricultura">Agricultura de Precisi&oacute;n</a>
                                        <a class="dropdown-item" href="/ganaderia">Ganader&iacute;a de Precisi&oacute;n</a>
                                        <a class="dropdown-item" href="/inteligencia">Inteligencia Atificial</a>
                                        <a class="dropdown-item" href="/agrimensura">Agrimensura</a>
                                        <a class="dropdown-item" href="/mineriaOilGas">Miner&iacute;a Oil&GAs</a>
                                        <a class="dropdown-item" href="/administracionSiembras">Administrador de Siembras</a>
                                        <a class="dropdown-item" href="/servicioDrones">Drones como servicio</a>
                                        <a class="dropdown-item" href="/realidadVirtual">Realidad Virtual</a>
                                        <a class="dropdown-item" href="/agriculturaDigital">Agricultura Digital</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown pr-2">
                                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PRODUCTOS
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/drones">Drones</a>
                                        <a class="dropdown-item" href="/explorerpro">Explorer Pro</a>
                                        <a class="dropdown-item" href="/explorer">Explorer</a>
                                    </div>
                                </li>

                                <li class="nav-item active pr-2">
                                    <a class="btn btn-light" href="/empresa">EMPRESA</a>
                                </li>

                                <li class="nav-item active pr-2">
                                    <a class="btn btn-light" href="/contacto">CONTACTO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 navbar mt-6 d-flex justify-content-around">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="btn btn-outline-success dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i> ACCESO
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if (Route::has('login'))
                                    @auth
                                    <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Iniciar sesion</a>
                                    @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
                                    @endif
                                    @endauth
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>

    <div class="container col-md-12 bg-white">
        <div class="row d-flex justify-content-center pb-5 pt-5">
            <div class="col-md-10">
                <ul class="list-unstyled text-justify row col-md-7 float-left">
                    <li class="list-item">
                        <h5 class="barlow400"><span class="barlow700">LA MEJOR OPCIÓN DEL MERCADO</span><br>
                            Las caracteristicas tecnicas del Explorer unidas a la experiencia del Explorer unidas a las experiencias del
                            Estudio G&D hacen de esta plataforma a&eacute;rea no tripulada la mejor
                            opci&oacute;n del mercado,
                            no solo por sus capacidades o su calidad sino también por su reducido costo, muy por debajo de cualquier UAV del mercado.
                        </h5>
                    </li>
                </ul>

                <ul class="list-unstyled text-justify row col-md-4 float-right">
                    <li class="list-item">
                        <h5 class="montserrat500">CONTACTENOS</h5>
                        <h4 class="text-secondary"><i class="fab fa-whatsapp"></i> 0249 444-7899<br><i class="far fa-envelope"></i> info@estudiogyd.com.ar </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container col-md-12 bg-servicios-footer">
        <div class="row d-flex justify-content-center pb-3 pt-4">
            <div class="col-md-12">
                <ul class="list-unstyled row text-white col-md-8 float-left">
                    <li class="list-item col-md-6 montserrat600">SERVICIOS</li>
                    <li class="list-item col-md-6"></li>
                    <li class="list-item col-md-6">AGRICULTURA Y GANADERÍA DE PRECISIÓN</li>
                    <li class="list-item col-md-6">INTELIGENCIA ARTIFICIAL</li>
                    <li class="list-item col-md-6">AGRICULTURA DIGITAL</li>
                    <li class="list-item col-md-6">REALIDAD VIRTUAL</li>
                    <li class="list-item col-md-6">OIL & GAS</li>
                    <li class="list-item col-md-6">DRONES TANTO SERVICIO COMO FABRICACIÓN</li>
                    <li class="list-item col-md-6">AGRIMENSURA</li>
                    <li class="list-item col-md-6">MINERIA</li>
                </ul>

                <ul class="list-unstyled list-group text-justify row text-white col-md-4 float-right">
                    <li class="list-item montserrat600">PRODUCTOS</li>
                    <li class="list-item">AGRICULTURA Y GANADERÍA DE PRECISIÓN</li>
                    <li class="list-item">AGRICULTURA DIGITAL</li>
                    <li class="list-item">OIL & GAS</li>
                    <li class="list-item">AGRIMENSURA</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container col-md-12 bg-contacto-footer pt-4 pb-4">
        <div class="row">
            <div class="col-md-3 pl-6">
                <div class="pt-3 pb-3">
                    <div>
                        <img src="\maquetacion\general\logo-footer.png" width="170px" height="70px">
                    </div>
                </div>
            </div>

            <div class="col-md-3 pt-4">
                    <div>
                        <p class="text-secondary"><i class="fab fa-whatsapp"></i> 0249 444-7899 </p>
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

    <div class="container col-md-12 bg-white">
        <div class="row pl-6 pt-4 text-secondary">
            <div><p>G&D. Ingenieria Digital. Todos los derechos reservados</p></div>
        </div>
    </div>
</body>
</html>
