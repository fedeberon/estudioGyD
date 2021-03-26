@extends('layouts.navbarLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">

        <div class="col-md-6 d-md-none">
            <img src="/maquetacion/p-mineria-oilgas/bg-intro-mineria.png" class="img-fluid float-right" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">SERVICIOS</h6>
                <h2 class="text-white montserrat700">MINERIA - OIL&GAS</h2>
                <h4 class="text-white montserrat300">
                    G&D brinda a estos sectores servicios de relevamientos utilizando la m&aacute;s moderna tecnolog&iacute;a con el fin de lograr datos precisos y detallados para generar informaci&oacute;n que permita la correcta toma de decisiones. Tenemos un servicio para cada proyecto de nuestros clientes.</h4>
                </p>
            </div>
        </div>

        <div class="col-md-6 d-none d-md-block">
            <img src="/maquetacion/p-mineria-oilgas/bg-intro-mineria.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h4 class="barlow700 pt-4 pb-3">G&D brinda un paquete de soluciones tecnol&oacute;gicas al rubro de la Miner&iacute;a y Oil&Gas, Estos son:
            </h4>
        </div>
        <div class="col-md-10 pt-3 pb-3">
            <div class="row">
                <div class="card-deck">
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/01.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Relevamientos con drones</h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/02.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mapeo con georadar</h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/03.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Relevamientos Lidar</h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-deck">
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/04.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sondeos el&eacute;ctricos verticales</h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/05.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Estudios Ambientales</h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                    <div class="card border-0 bg-nav">
                        <img src="/maquetacion/p-mineria-oilgas/06.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Realidad Virtual para capacitacion y Entrenamiento
                            </h5>
                            <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
