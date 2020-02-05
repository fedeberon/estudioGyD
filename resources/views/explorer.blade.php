@extends('layouts.navbarLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">

        <div class="col-md-6 d-md-none">
            <img src="/maquetacion/p-dron-explorer/bg-intro-dron-explorer.png" class="img-fluid float-right" alt="Responsive image">
        </div>

        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">PRODUCTOS</h6>
                <h2 class="text-white montserrat400">DRONE</h2>
                <h2 class="text-white montserrat700">EXPLORER</h2>
                <h4 class="text-white montserrat300">
                    Primer avión no tripulado de orígen argentino, con fines agronómicos
                    sistema aéreo no tripulado EXPLORER: robustez, confiabilidad y alto rendimiento.
                </h4>
                </p>
            </div>
        </div>

        <div class="col-md-6 d-none d-md-block">
            <img src="/maquetacion/p-dron-explorer/bg-intro-dron-explorer.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="/maquetacion/p-dron-explorer/logo-explorer.jpg" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <p class="montserrat300">
                        El Explorer es un equipo muy robusto, pensado para realizar relevamientos de grandes superficies gracias a su gran
                        autonomía y a su capacidad de carga que le permite transportar diferentes tipos de sensores.
                    </p>

                    <p class="montserrat300 pt-4">
                        Su sistema de despegue por medio de una lanzadera, le confiere gran seguridad y una rapida puesta en vuelo.
                        El Explorer brinda la posibilidad de realizar relevamientos precisos y de gran escala, su performance
                        es excelente para cualquier ambiente.
                    </p>
                </div>

                <div class="col-md-10 pt-3 pb-5 d-none d-md-block">
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            <img src="/maquetacion/p-dron-explorer/intro-01.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-6">
                            <img src="/maquetacion/p-dron-explorer/intro-02.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12 bg-comp d-md-none">
    <div class="row d-flex justify-content-center">
        <h5 class="montserrat600 text-center mt-5">RESUMEN DE LAS CARACTERISTICAS</h5>
        <div class="col-md-10 ml-4 mr-4 mb-4 mt-2 bg-white rounded">
            <div class="col-md-6">
                <ul class="list-unstyled text-center row">
                    <li class="list-item col-12 py-2"><img class="float-left" src="/maquetacion/p-drones/dron-explorer.jpg" width="160px"><p class="text-success text-left montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER</p></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Peso<br><span class="montserrat400">3,5</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Velocidad crucero<br><span class="montserrat400">70 km/h</span></li>
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
                    <li class="list-item montserrat600 col-md-6 py-2"><p class="text-left pt-5 montserrat700 text-uppercase">RESUMEN DE LAS<br>CARACTERIST&iacute;CAS</p>
                    <li class="list-item col-md-6 py-2"><img class="float-left" src="/maquetacion/p-drones/dron-explorer.jpg" width="180px"><p class="text-success montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER</p></li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Peso</li>
                    <li class="list-item col-md-6 border-top py-2">3,5</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad crucero</li>
                    <li class="list-item col-md-6 border-top py-2">70 km/h</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad del viento maxima para despegue</li>
                    <li class="list-item col-md-6 border-top py-2">40 km/h</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Autonomia</li>
                    <li class="list-item col-md-6 border-top py-2">1,30 hs</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Despegue</li>
                    <li class="list-item col-md-6 border-top py-2">Automatico</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Sistema de despuegue</li>
                    <li class="list-item col-md-6 border-top py-2">Lanzadera</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Caja de transporte</li>
                    <li class="list-item col-md-6 border-top py-2">Si</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Cantidad de baterias</li>
                    <li class="list-item col-md-6 border-top py-2">1</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Piloto automatico</li>
                    <li class="list-item col-md-6 border-top py-2">Si</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Radio control</li>
                    <li class="list-item col-md-6 border-top py-2">Si</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Homologado por ANAC</li>
                    <li class="list-item col-md-6 border-top py-2">Si</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Computadora de seguimiento de vuelo</li>
                    <li class="list-item col-md-6 border-top py-2">Opcional</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Cantidad de camaras que puede transportar</li>
                    <li class="list-item col-md-6 border-top py-2">2</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Tipo de camaras que puede transportar</li>
                    <li class="list-item col-md-6 border-top py-2">Multiespectral, RGB, Termicas</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Configuracion de vuelo</li>
                    <li class="list-item col-md-6 border-top py-2">Sistema de gestion de mision</li>
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
            <h5 class="font-weight-bold text-center pt-2">VIDEOS</h5>
        </div>
        <div class="col-md-10 rounded bg-white pt-5 pl-5 pr-5 pb-2 mb-5 shadow">

            <div id="mediaCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video controls width="100%" height="50%">
                        <source src="/maquetacion/p-dron-explorer/videos/Despegue manual con catapulta.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="montserrat600">DESPEGUE</h5>
                        <p>Dron explorer.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <video controls width="100%" height="50%">
                        <source src="/maquetacion/p-dron-explorer/videos/GOPR9209.MP4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-item">
                    <video controls width="100%" height="50%">
                        <source src="/maquetacion/p-dron-explorer/videos/GOPR9211.MP4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        ​
        <div class="text-center">
            <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="prev"><i class="fas fa-chevron-left text-success"></i></button>
            <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="next"><i class="fas fa-chevron-right text-success"></i></button>
        </div>
    </div>
</div>
</div>
@endsection
