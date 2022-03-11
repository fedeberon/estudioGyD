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

    <script>
        let email = document.getElementById("mail");

        email.addEventListener("keyup", function (event) {
            if (email.validity.typeMismatch) {
                email.setCustomValidity("Introduce una direccion de correo valida");

            } else {
                email.setCustomValidity("");
            }
        });
    </script>
</head>
<body>
<div class="container col-md-12 bg-nav2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="row">
            <div class="col-md-12 d-none d-md-block">
                <div class="col-md-5 float-left montserrat300"><p>Servicio de Ingenieria digital para el desarrollo productivo</p></div>

                <div class="col-md-7 float-right">
                    <ul class="navbar-nav float-right">
                        <li class="nav-item pr-3">
                            <a class="btn btn-light" href="https://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook"></i> FACEBOOK</a>
                        </li>

                        <li class="nav-item pr-3">
                            <a class="btn btn-light" href="http://www.youtube.com/user/estudiogyd" target="_blank"><i class="fab fa-youtube"></i> YOUTUBE</a>
                        </li>

                        <li class="nav-item pr-3">
                            <a class="btn btn-light" href="https://www.linkedin.com/in/mariano-delbuono-b95b1b22/" target="_blank"><i class="fab fa-linkedin"></i> LINKEDIN</a>
                        </li>

                        <li class="nav-item pr-3">
                            <a class="btn btn-light d-none d-md-block" href="https://web.whatsapp.com/send?phone=5492494697996&amp;text=Hola, necesito hacerles una consulta..." target="_blank"><i class="fab fa-whatsapp"></i> +549 249 4697996</a>
                        </li>

                        <li class="nav-item">
                            <a href="mailto:info@estudiogyd.com.ar" class="btn btn-light"><i class="fas fa-envelope"></i> info@estudiogyd.com.ar</a>
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

                    <a class="btn btn-light" href="http://www.youtube.com/user/estudiogyd" target="_blank"><i class="fab fa-youtube"></i></a>

                    <a class="btn btn-light" href="https://www.linkedin.com/in/mariano-delbuono-b95b1b22/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-around">
                <div class="row">

                    <div class="col-md-4 rounded-circle navbar logo">
                        <a href="/"><img src="\images\general\logo-top.png" height="145" width="145"></a>
                    </div>

                    <div class="col-md-7 paddingResp collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mt-3 barlow600">
                            <li class="nav-item active pr-2">
                                <a class="btn btn-light" href="/">INICIO</a>
                            </li>

                            <li class="nav-item dropdown pr-2">
                                <a class="btn btn-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SERVICIOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/administracionSiembras">Administraci&oacute;n de Siembras</a>
                                    <a class="dropdown-item" href="/agricultura">Agricultura de Precisi&oacute;n</a>
                                    <a class="dropdown-item" href="/agriculturaDigital">Agricultura Digital</a>
                                    <a class="dropdown-item" href="/agrimensura">Agrimensura</a>
                                    <a class="dropdown-item" href="/servicioDrones">Drones como servicio</a>
                                    <a class="dropdown-item" href="/ganaderia">Ganader&iacute;a de Precisi&oacute;n</a>
                                    <a class="dropdown-item" href="/inteligencia">Inteligencia Artificial</a>
                                    <a class="dropdown-item" href="/mineriaOilGas">Miner&iacute;a Oil&GAs</a>
                                    <a class="dropdown-item" href="/realidadVirtual">Realidad Virtual</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown pr-2">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PRODUCTOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/drones">Drones</a>
                                    <a class="dropdown-item" href="/explorer">Explorer</a>
                                    <a class="dropdown-item" href="/explorerpro">Explorer Pro</a>
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
                <div class="col-md-2 navbar mt-3 d-flex justify-content-around">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="btn btn-outline-success dropdown-toggle text-left" href="#" title="Plataforma Web" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user"></i> ACCESO<br>PLATAFORMA
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
    <div class="row d-flex justify-content-around pb-5 pt-5">
        <div class="col-md-10">
            <ul class="nav nav-tabs barlow700" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="argentina-tab" data-toggle="tab" href="#argentina" role="tab" aria-controls="argentina" aria-selected="true">ARGENTINA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="uruguay-tab" data-toggle="tab" href="#uruguay" role="tab" aria-controls="uruguay" aria-selected="false">URUGUAY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="eeuu-tab" data-toggle="tab" href="#eeuu" role="tab" aria-controls="eeuu" aria-selected="false">ESTADOS UNIDOS</a>
                </li>
            </ul>

            <div class="tab-content barlow400" id="myTabContent">
                <div class="tab-pane fade show active" id="argentina" role="tabpanel" aria-labelledby="argentina-tab">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 pt-5">
                                <p class="pb-5">Para realizarnos una consulta podés escribírnos a través de nuestro formulario online.</p>

                                <form action={{route('consulta')}} method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="nombre" class="form-control rounded-0" placeholder="Nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control rounded-0" placeholder="Email" id="mail" name="mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="telefono" class="form-control rounded-0"  placeholder="Telefono" name="telefono" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0"  placeholder="Mensaje" name="consulta" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" id='btn-contact' class="btn btn-primary rounded-pill bg-dark">Enviar</button>
                                </form>
                            </div>

                            <div class="col-md-7 py-5">
                                <div class="row">
                                    <div class="col-4 border-right"><p class="text-secondary text-center"><span></span><i class="fas fa-phone"></i><br>0249 440-6585</p></div>

                                    <div class="col-4 border-right"><p class="text-secondary text-center"><span></span><i class="far fa-envelope"></i><br>info@estudiogyd.com.ar</p></div>

                                    <div class="col-4"><p class="text-secondary text-center"><span></span><i class="fas fa-map-marker-alt"></i><br>Av. Avellaneda 351,<br> B7000 Tandil, Buenos Aires</p></div>
                                </div>

                                <div class="resp-container">
                                    <iframe class="pt-4 resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.7612954512424!2d-59.09885578507587!3d-37.324481613976076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911fbc4fc8bc9f%3A0x4d873d2bda4cdbf0!2sEstudio%20G%26D!5e0!3m2!1ses!2sar!4v1647017345915!5m2!1ses!2sar" width="600" height="450" style="border:0;" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="uruguay" role="tabpanel" aria-labelledby="uguay-tab">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 pt-5">
                                <p class="pb-5">Para realizarnos una consulta podés escribírnos a través de nuestro formulario online.</p>

                                <form action={{route('consulta')}} method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="nombre" class="form-control rounded-0" placeholder="Nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control rounded-0" placeholder="Email" id="mail" name="mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="telefono" class="form-control rounded-0"  placeholder="Telefono" name="telefono" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0"  placeholder="Mensaje" name="consulta" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" id='btn-contact' class="btn btn-primary rounded-pill bg-dark">Enviar</button>
                                </form>
                            </div>

                            <div class="col-md-7 py-5">
                                <div class="row">
                                    <div class="col-md-4 border-right d-none d-md-block"><p class="text-secondary text-center"><span></span><i class="fas fa-phone"></i><br>Tel:  (+598) 2 902 35 14<br>Fax: (+598) 2 902 35 14</p></div>

                                    <div class="col-md-4 border-right d-none d-md-block"><p class="text-secondary text-center"><span></span><i class="far fa-envelope"></i><br>info@martinfablet.com<br>http://www.martinfablet.com</p></div>

                                    <div class="col-md-4 d-none d-md-block"><p class="text-secondary text-center"><span></span><i class="fas fa-map-marker-alt"></i><br>Paysandú 1271<br>Montevideo-Uruguay</p></div>
                                </div>

                                <div class="row d-md-none">
                                    <div class="col-6 border-right"><p class="text-secondary text-center"><span></span><i class="fas fa-phone"></i><br>Tel:  (+598) 2 902 35 14<br>Fax: (+598) 2 902 35 14</p></div>

                                    <div class="col-6 border-right"><p class="text-secondary text-center"><span></span><i class="fas fa-map-marker-alt"></i><br>Paysandú 1271<br>Montevideo-Uruguay</p></div>

                                    <div class="col-12"><p class="text-secondary text-center"><span></span><i class="far fa-envelope"></i><br>info@martinfablet.com<br>http://www.martinfablet.com</p></div>
                                </div>

                                <div class="resp-container">
                                    <iframe class="pt-4 resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.179869202282!2d-56.19121658513827!3d-34.901935380844314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f8033b031e1af%3A0x6b183fca94f73360!2sPaysand%C3%BA%201271%2C%2011100%20Montevideo%2C%20Departamento%20de%20Montevideo%2C%20Uruguay!5e0!3m2!1ses!2sar!4v1581346555760!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="eeuu" role="tabpanel" aria-labelledby="eeuu-tab">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 pt-5">
                                <p class="pb-5">Para realizarnos una consulta podés escribírnos a través de nuestro formulario online.</p>

                                <form action={{route('consulta')}} method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="nombre" class="form-control rounded-0" placeholder="Nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control rounded-0" placeholder="Email" id="mail" name="mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="telefono" class="form-control rounded-0"  placeholder="Telefono" name="telefono" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0"  placeholder="Mensaje" name="consulta" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" id='btn-contact' class="btn btn-primary rounded-pill bg-dark">Enviar</button>
                                </form>
                            </div>

                            <div class="col-md-7 py-5">

                                <div class="row d-md-none">
                                    <div class="col-6 border-right"><p class="text-secondary text-center"><span></span><i class="fas fa-phone"></i><br>(760) 567-6016</p></div>

                                    <div class="col-6"><p class="text-secondary text-center"><span></span><i class="far fa-envelope"></i><br>1851 N. San Clemente Rd.<br>Palm Springs, CA 92262</p></div>

                                    <div class="col-12"><p class="text-secondary text-center"><span></span><i class="fas fa-map-marker-alt"></i><br><span class="barlow700">Julian Garcia Baldizzone</span> JulianGBaldizzone@estudiogyd.com.ar<br><br><span class="barlow700">Maria Magdalena Tortosa</span> magdalenatortosa@estudiogyd.com.ar<br><br>www.estudiogyd.com.ar</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 border-right d-none d-md-block">
                                        <p class="text-secondary text-center">
                                            <i class="fas fa-phone"></i>
                                            <br>(760) 567-6016
                                        </p>
                                        <hr>
                                        <p class="text-secondary text-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>1851 N. San Clemente Rd.<br>Palm Springs, CA 92262
                                        </p>
                                    </div>

                                    <div class="col-md-8 d-none d-md-block"><p class="text-secondary text-center"><i class="far fa-envelope"></i><br><span class="barlow700">Julian Garcia Baldizzone</span> JulianGBaldizzone@estudiogyd.com.ar<br><br><span class="barlow700">Maria Magdalena Tortosa</span> magdalenatortosa@estudiogyd.com.ar<br><br>www.estudiogyd.com.ar</p></div>
                                </div>

                                <div class="resp-container">
                                    <iframe class="pt-4 resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.689669474425!2d-116.51508638479031!3d33.846112880662446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80db1c0a8fa3fbf9%3A0x36f1ddc02cd40c98!2s1851%20N%20San%20Clemente%20Rd%2C%20Palm%20Springs%2C%20CA%2092262%2C%20EE.%20UU.!5e0!3m2!1ses!2sar!4v1581346521577!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
                <li class="list-item col-md-6">SERVICIO DE DRONES</li>
                <li class="list-item col-md-6">AGRIMENSURA</li>
                <li class="list-item col-md-6">MINERIA</li>
            </ul>

            <ul class="list-unstyled list-group text-justify row text-white col-md-4 float-right">
                <li class="list-item montserrat600">PRODUCTOS</li>
                <li class="list-item">DRONE EXPLORER</li>
                <li class="list-item">DRONE EXPLORER PRO</li>
                <li class="list-item"></li>
                <li class="list-item"></li>
            </ul>
        </div>
    </div>
</div>

<div class="container col-md-12 bg-contacto-footer pt-4 pb-4">
    <div class="row">
        <div class="col-md-3 pl-6">
            <div class="pt-3 pb-3">
                <div>
                    <img src="\images\general\logo-footer.png" width="160px" height="70px">
                </div>
            </div>
        </div>

        <div class="col-md-3 pt-4">
            <div>
                <p class="text-secondary"><i class="fab fa-whatsapp"></i> +5492494697996</p>
            </div>
        </div>

        <div class="col-md-3 pt-4">
            <div>
                <a href="mailto:info@estudiogyd.com.ar" class="text-secondary"><i class="far fa-envelope"></i> info@estudiogyd.com.ar </a>
            </div>
        </div>

        <div class="col-md-3 pt-4 d-none d-md-block">
            <div>
                <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> RN226 km 163,4,<br>B7000 Tandil, Buenos Aires </p>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white">
    <div class="row">
        <div class="col-md-10 text-secondary copy">G&amp;D. Ingenieria Digital. Todos los derechos reservados</div>
        <div class="col-md-2 cont-logo-zurbrand"><a href="https://www.zurbrand.com/?utm_source=gydingenieria&utm_medium=firma_site" class="link-zurbrand" title="Zurbrand | Diseño web profesional" target="_blank"><img src="https://www.zurbrand.com/firma/logo-zurbrand-v4-01.png" class="logo-zurbrand" alt="Zurbrand | Diseño web profesional" title="Zurbrand | Diseño web profesional"></a></div>
    </div>
</div>
</body>
</html>
