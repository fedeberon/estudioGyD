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
                                                    <a class="btn btn-primary btn-block" href="/index">Usuarios <i class="fas fa-chevron-right"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
