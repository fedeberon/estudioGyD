@extends('layouts.navbarLayout')

@section('content')
    <div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
        <div class="row no-gutters">
            <div class="col-md-6 d-md-none">
                <img src="/maquetacion/p-drones/bg-intro-drones.png" class="img-fluid float-left" alt="Responsive image">
            </div>
            <div class="col-md-6">
                <div class="p-5" id="productosDrones">

                    <p class="text-white pl-5 pt-5">
                    <h6 class="text-success montserrat300">PRODUCTOS</h6>
                    <h2 class="text-white montserrat700">DRONES</h2>
                    <h4 class="text-white montserrat300">
                        La l&iacute;nea de Drones explorer esta desarrollada y configurada por G&D,
                        son equipos altamente probados ya que son los mismos que G&D utiliza para
                        brindar el servicio de relevamiento con drones.
                        Esto le da una confiabilidad absoluta y garantiza un exelente desempe&ntilde;o.
                    </h4>
                    </p>
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <img src="/maquetacion/p-drones/bg-intro-drones.png" class="img-fluid float-right" alt="Responsive image">
            </div>
        </div>
    </div>

    <div class="container col-md-12 p-5 bg-white">
        <div class="row justify-content-center">

            <div class="text-center col-md-12 pt-2 pb-2">
                <h4 class="montserrat600 montserrat600">EQUIPOS</h4>
                <h5 class="montserrat300">Homologados por ANAC</h5>
            </div>

            <div class="card-deck col-md-10">
                <div class="card">
                    <img src="/maquetacion/p-drones/dron-explorerpro.jpg" class="card-img-top">
                    <div class="card-body">
                        <a href="explorerpro"><h5 class="card-title text-success montserrat300">DRON <span class="montserrat600">XPLORER PRO</span><i class="fas fa-chevron-circle-right text-right text-dark pl-2"></i></h5></a>
                    </div>
                </div>

                <div class="card">
                    <img src="/maquetacion/p-drones/dron-explorer.jpg" class="card-img-top">
                    <div class="card-body">
                        <a href="/explorer"><h5 class="card-title text-success montserrat300">DRON <span class="montserrat600">XPLORER</span> <i class="fas fa-chevron-circle-right text-dark pl-2"></i></h5></a>
                    </div>
                </div>

                <div class="card d-none d-md-block">
                    <img src="/maquetacion/p-drones/dron-comparacion.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-success montserrat300">COMPARATIVA <i class="fas fa-chevron-circle-right text-dark pl-2"></i></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-12 bg-comp d-md-none">
        <div class="row d-flex justify-content-center">
            <h5 class="montserrat600 text-center mt-5">COMPARATIVA DE EQUIPOS</h5>
            <div class="col-md-10 ml-4 mr-4 mb-4 mt-2 bg-white rounded">
                <div class="col-md-6">
                    <ul class="list-unstyled text-center row">
                        <li class="list-item col-6 py-2"><img src="/maquetacion/p-drones/dron-explorerpro.jpg" class="float-left img-fluid col-12" alt="Responsive image"><p class="text-success text-left montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER PRO</p></li>
                        <li class="list-item col-6 py-2"><img src="/maquetacion/p-drones/dron-explorer.jpg" class="float-left img-fluid col-12" alt="Responsive image"><p class="text-success text-left montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER</p></li>
                        <li class="list-item montserrat600 col-6 text-center border-top py-2">Peso<br><span class="montserrat400">1,5</span></li>
                        <li class="list-item montserrat600 col-6 text-center border-top py-2">Peso<br><span class="montserrat400">3,5</span></li>
                        <li class="list-item montserrat600 col-6 text-center border-top py-2">Velocidad crucero<br><span class="montserrat400">70 km/h</span></li>
                        <li class="list-item montserrat600 col-6 text-center border-top py-2">Velocidad crucero<br><span class="montserrat400">70 km/h</span></li>
                    </ul>
                </div>

                <div class="text-center pt-5">


                    <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                </div>
                <h5 class="text-center pt-4 pb-5">Fabricamos equipos a medida, para tareas<br>espec&iacute;ficas que incluyen RTK o PPK</h5>
            </div>
        </div>
    </div>


    <div class="container col-md-12 bg-comp d-none d-md-block">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 m-5 bg-white rounded">
                <div class="col-md-12">
                        <ul class="list-unstyled text-center row">
                            <li class="list-item montserrat600 col-md-4 py-2"><p class="text-left pt-5 montserrat700">COMPARATIVA<br>DE EQUIPOS</p></li>
                            <li class="list-item col-md-4 py-2"><img class="float-left" src="/maquetacion/p-drones/dron-explorerpro.jpg" width="180px"><p class="text-success pt-5 montserrat700"><span class="montserrat400">DRON</span><br>XPLORER<br>PRO</p></li>
                            <li class="list-item col-md-4 py-2"><img class="float-left" src="/maquetacion/p-drones/dron-explorer.jpg" width="180px"><p class="text-success montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER</p></li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Peso</li>
                            <li class="list-item col-md-4 border-top py-2">1,5</li>
                            <li class="list-item col-md-4 border-top py-2">3,5</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad crucero</li>
                            <li class="list-item col-md-4 border-top py-2">70 km/h</li>
                            <li class="list-item col-md-4 border-top py-2">70 km/h</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad del viento maxima para despegue</li>
                            <li class="list-item col-md-4 border-top py-2">35 km/h</li>
                            <li class="list-item col-md-4 border-top py-2">40 km/h</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Autonomia</li>
                            <li class="list-item col-md-4 border-top py-2">1 h</li>
                            <li class="list-item col-md-4 border-top py-2">1,30 hs</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Despegue</li>
                            <li class="list-item col-md-4 border-top py-2">Automatico</li>
                            <li class="list-item col-md-4 border-top py-2">Automatico</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Sistema de despuegue</li>
                            <li class="list-item col-md-4 border-top py-2">Impulsado con la mano</li>
                            <li class="list-item col-md-4 border-top py-2">Lanzadera</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Caja de transporte</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Cantidad de baterias</li>
                            <li class="list-item col-md-4 border-top py-2">1</li>
                            <li class="list-item col-md-4 border-top py-2">1</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Piloto automatico</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Radio control</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Homologado por ANAC</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item col-md-4 border-top py-2">Si</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Computadora de seguimiento de vuelo</li>
                            <li class="list-item col-md-4 border-top py-2">Opcional</li>
                            <li class="list-item col-md-4 border-top py-2">Opcional</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Cantidad de camaras que puede transportar</li>
                            <li class="list-item col-md-4 border-top py-2">1</li>
                            <li class="list-item col-md-4 border-top py-2">2</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Tipo de camaras que puede transportar</li>
                            <li class="list-item col-md-4 border-top py-2">Multiespectral, RGB, Termicas</li>
                            <li class="list-item col-md-4 border-top py-2">Multiespectral, RGB, Termicas</li>
                            <li class="list-item montserrat600 col-md-4 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Configuracion de vuelo</li>
                            <li class="list-item col-md-4 border-top py-2">Sistema de gestion de mision</li>
                            <li class="list-item col-md-4 border-top py-2">Sistema de gestion de mision</li>
                        </ul>
                    </div>

                    <div class="text-center pt-5">
                        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                    </div>
                    <h5 class="text-center pt-4 pb-5">Fabricamos equipos a medida, para tareas<br>espec&iacute;ficas que incluyen RTK o PPK</h5>
            </div>
        </div>
    </div>

    <div class="container col-md-12 bg-video bg-white">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pt-5">
                <h5 class="montserrat600 text-center pt-2">VIDEOS</h5>
            </div>
            <div class="col-md-10 rounded bg-white pt-5 pl-5 pr-5 pb-2 mb-5 shadow">

                <div id="mediaCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video controls width="100%" height="50%">
                            <source src="/maquetacion/p-drones/videos/20181116_144514.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="montserrat600">SEGUIMIENTO DE VUELO</h5>
                            <p>Software de planificaci&oacute;n y seguimiento de telemer&iacute;a de vuelo.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-default rounded-circle" disabled href="#mediaCarousel" data-slide="prev" ><i class="fas fa-chevron-left text-success"></i></button>
                <button class="btn btn-default rounded-circle" disabled href="#mediaCarousel" data-slide="next" ><i class="fas fa-chevron-right text-success"></i></button>
            </div>
        </div>
    </div>

    </div>


    <div class="container col-md-12 bg-white">

        <div class="row justify-content-center pt-4">
            <div class="col-md-10">
                <div class="col-md-8">
                    <h5 class="montserrat700">METODOLOGIA DE TRABAJO</h5>
                    <h5 class="text-secondary montserrat400">Configurar el vuelo de un Explorer es muy simple y se aprende en cuesti&oacute;n de minutos
                        gracias a su software intuitivo de gesti&oacute;n de vuelo. Los pasos son:</h5>
                </div>

                <div class="col-md-12 pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            <img src="/maquetacion/p-drones/metodologia-1.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-6">
                            <img src="/maquetacion/p-drones/metodologia-2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-4 pb-4">
                    <div class="row">
                        <ul class="list-unstyled text-justify row">
                            <li class="list-item col-md-6 py-2">
                                <p>
                                    <span class="montserrat700 h5">Planificaci&oacute;n de la misi&oacute;n</span><br>
                                    En la oficina (y en el campo) los usuarios
                                    pueden definir la zona de la misi&oacute;n, añadir mapas de fondo y, si fuera necesario, definir zonas a evitar. El
                                    software calcula el tiempo total de vuelo necesario para cubrir la zona de la misi&oacute;n y permite al usuario dividir
                                    la zona en varios vuelos cuando sea necesario debido al tamaño de la zona.
                                </p>
                            </li>

                            <li class="list-item col-md-6 py-2 d-none d-md-block">
                                <p>
                                    <span class="montserrat700 h5">Planificaci&oacute;n de vuelo</span><br>
                                    Para cada vuelo, el piloto identifica
                                    la direcci&oacute;n del viento, la ubicaci&oacute;n del lanzamiento y el lugar de aterrizaje, por lo que la duraci&oacute;n del vuelo se re-calcula
                                    en base a las condiciones de campo en el momento de vuelo. A continuaci&oacute;n, se completa la lista de comprobaciones previas
                                    al vuelo para garantizar la seguridad del equipo de trabajo.
                                </p>
                            </li>

                            <li class="list-item col-md-6 py-2 d-none d-md-block">
                                <p>
                                    <span class="montserrat700 h5">Despegue</span><br>
                                    Una vez que la mosi&oacute;n est&aacute; armada y caragda en la memoria
                                    del piloto autom&aacute;tico del avion, se comprueba y chequea el sistema y las condiciones clim&aacute;ticas y se lanza el equipo para que
                                    se realice el mapeo.
                                </p>
                            </li>

                            <li class="list-item col-md-6 py-2 d-none d-md-block">
                                <p>
                                    <span class="montserrat700 h5">Aterrizaje</span><br>
                                    Una vez que el equipo ha relizado la tarea se procede
                                    a aterrizar de forma aut&oacute;noma o manual, siempre teniendo en cuenta las condiciones clim&aacute;ticas y el sitio elegido para aterrizar.
                                </p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-12 bg-nav">

        <div class="row justify-content-center pt-5">
            <div class="col-md-10">
                <h5 class="montserrat600">INFORMACION QUE LOGRAMOS<br><span class="montserrat300">El explorer puede transportar varios tipos de c&aacute;maras
                        para obtener video Full HD o 4K o una Digital para el posterior armado de mosaicos georeferenciales<span>
                </h5>
            </div>
        </div>


        <div class="row justify-content-center pt-4">
            <div class="col-md-10 mb-5 bg-white rounded">

                <div class="col-md-12 pt-4">
                    <div class="row">
                        <div class="col-md-6 float-left">
                            <h5 class="montserrat600">C&aacute;mara GoPro.</h5>
                            <p class="text-secondary montserrat300">Esta camara le permite obtener al productor videos de alt&iacute;sima calidad y
                                resoluci&oacute;n de sus lotes, generando informaci&oacute;n del estado de sus cultivos, midiendo el
                                efecto de alguna ourrencia clim&aacute;tica tal como volteo por viento, daños por granizo o el efecto
                                posterior a una lluvia intensa. Todo gracias a la utilizacion del exclusivo software de georeferenciaci&oacute;n
                                de video que integra esta plataforma a&eacute;rea no tripulada.
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <img src="/maquetacion/p-drones/info-1.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="col-md-12 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 float-left">
                            <h5 class="montserrat600">C&aacute;mara RGB.</h5>
                            <p class="text-secondary montserrat300">Las im&aacute;genes permiten el armado de mosaicos georeferenciados, para tener
                                un gran detalle de los lotes y cultivos.nav
                            </p>

                            <p class="text-secondary montserrat300">Para aquellos productores que quieren ir por mas el Explorer puede ir equipado con una camara RGB. Esta permite
                                lograr im&aacute;genes incre&iacute;bles que supera a cualquier plataforma a&eacute;rea no tripulada gracias a su calidad y
                                excepcional resoluci&oacute;n. el software de control de vuelo permite definir esta camara generando una configuracion
                                de vuelo extremadamente simple.
                            </p>
                            <p class="text-secondary montserrat300">
                                Tambi&eacute;n es factible obtener im&aacute;genes a partir de esta camara para construir modelos 3D de la superficie.
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <img src="/maquetacion/p-drones/info-2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <hr class="d-none d-md-block">

                <div class="col-md-12 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 float-left">
                            <h5 class="montserrat600">C&aacute;mara Multiespectral.</h5>
                            <p class="text-secondary montserrat300">Las c&aacute;maras multiespectrales permiten poder obtener im&aacute;genes que captan
                                diferentes longitudes de onda de espectro de la luz y as&iacute; por su combinaciones se generan indices,
                                uno de los m&aacute;s conocidos es el indice verde que permite evaluar el estado del cultivo y de esta forma
                                saber si est&aacute; siendo afectado su desarrollo.
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <img src="/maquetacion/p-drones/info-3.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <hr class="d-none d-md-block">

                <div class="col-md-12 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 float-left">
                            <h5 class="montserrat600">Topografia.</h5>
                            <p class="text-secondary montserrat300">
                                Los sistemas a&eacute;reos explorer permiten realizar mapeos de superficies con los cuales luego se pueden construir
                                modelos digitales de elevaciones muy precisos que representan la topograf&iacute;a del terreno con los que se realiza
                                diferentes tipos de estudio del terreno.
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <img src="/maquetacion/p-drones/info-4.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>

                <hr class="d-none d-md-block">

                <div class="col-md-12 pb-4 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 float-left">
                            <h5 class="montserrat600">Primer sistema de georeferenciaci&oacute;n de video.</h5>
                            <p class="text-secondary montserrat300">
                                Con esta aplicaci&oacute;n podemos obtener las coordenadas de los puntos que observamos con problemas sobre el
                                video y luego reconocerlas en el campo. <a target="_blank" href="https://www.youtube.com/watch?v=laueDq3nZAo">Ver demo</a>
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <img src="/maquetacion/p-drones/info-5.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
