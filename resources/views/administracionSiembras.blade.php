@extends('layouts.navbarLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">

        <div class="col-md-6 d-md-none">
            <img src="/images/p-administracion-siembras/bg-intro-administracion.png" class="img-fluid float-right" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">SERVICIOS</h6>
                <h2 class="text-white montserrat700">ADMINISTRACION DE SIEMBRAS</h2>
                <h4 class="text-white montserrat300">
                    Si est&aacute; buscando Invertir, le proponemos un excelente negocio con renta en d&oacute;lares, invierta en nuestro servicio de administraci&oacute;n de siembras y su capital crecer&aacute; año tras año.
                </h4>
                </p>
            </div>
        </div>

        <div class="col-md-6 d-none d-md-block">
            <img src="/images/p-administracion-siembras/bg-intro-administracion.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row">
                <div class="col-md-12 p-3 bg-white rounded shadow">
                    <div id="mediaCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/p-administracion-siembras/01.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/p-administracion-siembras/02.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/p-administracion-siembras/03.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/p-administracion-siembras/04.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-3">
                        <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="prev"><i class="fas fa-chevron-left text-success"></i></button>
                        <button class="btn btn-default rounded-circle" href="#mediaCarousel" data-slide="next"><i class="fas fa-chevron-right text-success"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-2 pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>
@endsection
