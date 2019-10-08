@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">
            <div class="card">
                <div class="card-header text-center">Panel de Control</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="card-deck">
                                @if(Auth::user()->role_id == '1')
                                    <div class="card">
                                        <i class="fas fa-users fa-5x pt-3 text-primary text-center"></i>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="card-title">Usuarios</h5>
                                                    <p class="card-text">ver y editar usuarios</p>
                                                </div>
                                                <div class="col-12 text-center pt-3">
                                                    <a class="btn btn-primary btn-block" href="{{action('UsersController@index')}}">Usuarios <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="card">
                                    <i class="fas fa-chalkboard-teacher fa-5x pt-3 text-primary text-center"></i>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="card-title">Tutoriales</h5>
                                                <p class="card-text">en ingl&eacute;s y espa&ntilde;ol</p>
                                            </div>
                                            <div class="col-12 text-center pt-3">
                                                <a class="btn btn-primary btn-block" href="/tutoriales">Tutoriales <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <i class="fas fa-globe-americas fa-5x pt-3 text-primary text-center"></i>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="card-title">Mapas NDVI</h5>
                                                <p class="card-text">visualizar mapas</p>
                                            </div>
                                            <div class="col-12 text-center pt-3">
                                                @if(Auth::user()->role_id != '2')
                                                    <a href="/regular" class="btn btn-primary btn-block">Regular <i class="fas fa-chevron-right"></i></a>
                                                @endif

                                                @if(Auth::user()->role_id != '3')
                                                    <a href="/premium" class="btn btn-warning btn-block">Premium <i class="fas fa-chevron-right"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <nav class="navbar fixed-bottom navbar-light bg-light">

                                    <h2 class="tetx-left" style="margin-bottom: 0%;">
                                        <a class="navbar-link text-primary pr-5" href="http://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook "></i></a>
                                        <a class="navbar-link text-danger pr-5" href="http://www.youtube.com/user/estudiogyd" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a class="navbar-link text-secondary pr-5" href="https://www.linkedin.com/in/mariano-delbuono-b95b1b22/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <!--<a class="navbar-link text-success" href="https://wa.me/542494447899" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
                                    </h2>

                                        <a class="navbar-link text-dark">info@estudiogyd.com.ar</a>
                                        <a class="navbar-link text-dark">Avellaneda 351</a>
                                        <a class="navbar-link text-dark">+54 249 4447899</a>

                                    <a href="#" class="navbar-link text-dark text-right" data-toggle="modal" data-target="#contactoModal">
                                       <h2 style="margin-bottom: 0%;"><i class="fas fa-qrcode"></i></h2>
                                    </a>
                                </nav>

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
