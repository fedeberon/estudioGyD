@extends('layouts.droneLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">
        <div class="col-md-6 d-md-none">
            <img src="/images/p-dron-explorer-pro/bg-intro-dron-explorerpro.png" class="img-fluid float-right" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">PRODUCTOS</h6>
                <h2 class="text-white montserrat400">DRONE</h2>
                <h2 class="text-white montserrat700">EXPLORER PRO</h2>
                <h4 class="text-white montserrat300">
                    El Xplorer Pro es la combinación perfecta entre costo y practicidad ya que es un equipo
                    robusto, liviano, rápido de poner en vuelo sin muchas partes para ensamblar y con una capaceidad
                    de carga más que interesante.
                </h4>
                </p>
            </div>
        </div>


        <div class="col-md-6 d-none d-md-block">
            <img src="/images/p-dron-explorer-pro/bg-intro-dron-explorerpro.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="/images/p-dron-explorer-pro/logo-explorerpro.jpg" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <p class="montserrat400">
                Este equipo es ideal para la realización de relevamientos en donde debemos movernos
                constantemente a diferentes lotes dentro de una zona, ya que por su tamaño podemos transportarlo
                sin necesidad de desmontarlo, esto hace que la operación de relevamiento sea mucho más eficiente,
                además al no requerir de una lanzadera, esto facilita aún más las tareas.
            </p>

            <p class="montserrat400 pt-4">
                Su autonomía, capacidad de carga y su fuselaje robusto, lo hacen perfecto para relevamientos de campos
                logrando información de excelente calidad.
            </p>
        </div>

        <div class="col-md-10 pt-3 pb-5 d-none d-md-block">
            <div class="row">
                <div class="col-md-6 pb-4">
                    <img src="/images/p-dron-explorer-pro/intro-01.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <img src="/images/p-dron-explorer-pro/intro-02.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
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
                    <li class="list-item col-12 py-2"><img class="float-left" src="/images/p-drones/dron-explorerpro.jpg" width="160px"><p class="text-success text-left montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER PRO</p></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Peso<br><span class="montserrat400">1,5</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Velocidad crucero<br><span class="montserrat400">70 km/h</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Velocidad del viento maxima para despegue<br><span class="montserrat400">35 km/h</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Autonomia<br><span class="montserrat400">1 hora</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Despegue<br><span class="montserrat400">Automatico</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Sistema de despuegue<br><span class="montserrat400">Impulsado con la mano</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Caja de transporte<br><span class="montserrat400">Si</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Cantidad de baterias<br><span class="montserrat400">1</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Piloto automatico<br><span class="montserrat400">Si</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Radio control<br><span class="montserrat400">Si</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Homologado por ANAC<br><span class="montserrat400">Si</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Computadora de seguimiento de vuelo<br><span class="montserrat400">Opcional</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Cantidad de camaras que puede transportar<br><span class="montserrat400">1</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Tipo de camaras que puede transportar<br><span class="montserrat400">Multiespectral, RGB, Termicas</span></li>
                    <li class="list-item montserrat600 col-12 text-center border-top py-2">Configuracion de vuelo<br><span class="montserrat400">Sistema de gestion de mision</span></li>
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
                    <li class="list-item col-md-6 py-2"><img class="float-left" src="/images/p-drones/dron-explorerpro.jpg" width="180px"><p class="text-success montserrat700 pt-5"><span class="montserrat400">DRON</span><br>XPLORER</p></li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Peso</li>
                    <li class="list-item col-md-6 border-top py-2">1,5</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad crucero</li>
                    <li class="list-item col-md-6 border-top py-2">70 km/h</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Velocidad del viento maxima para despegue</li>
                    <li class="list-item col-md-6 border-top py-2">35 km/h</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Autonomia</li>
                    <li class="list-item col-md-6 border-top py-2">1 hora</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Despegue</li>
                    <li class="list-item col-md-6 border-top py-2">Automatico</li>
                    <li class="list-item montserrat600 col-md-6 border-top text-left py-2"><i class="fas fa-chevron-circle-right text-success"></i> Sistema de despuegue</li>
                    <li class="list-item col-md-6 border-top py-2">Impulsado con la mano</li>
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
                    <li class="list-item col-md-6 border-top py-2">1</li>
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
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/KokNHPjlwRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="montserrat600">ATERRIZAJE</h5>
                            <p>Dron explorer pro.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/ARt9HV9T0w8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/rY0WxgSXdEE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/oRdxUFDoQe0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/YR5ApYxkU-U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="montserrat600">DESPEGUE</h5>
                            <p>Dron explorer pro.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/9ZEURntrQOg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/KokNHPjlwRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/epOIsL8SheM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/CGfKi6kpdTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <iframe class="col-12" style="height: 500px; width: 100%;" src="https://www.youtube.com/embed/htgr3pvBr-I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="prev"><i class="fas fa-chevron-left text-success"></i></button>
                <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="next"><i class="fas fa-chevron-right text-success"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
