@extends('layouts.homeLayout')

@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<div class="container col-md-12 bg-intro">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="col-12 card-deck">
                @if(Auth::user()->role_id == '1')
                <div class="card">
                    <i class="fas fa-users fa-5x pt-3 text-primary text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">ver y editar usuarios</p>
                        <a class="btn btn-primary btn-block" href="{{action('UsersController@index')}}">Usuarios <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                @endif

                <div class="card">
                    <i class="fas fa-chalkboard-teacher fa-5x pt-3 text-primary text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Tutoriales</h5>
                        <p class="card-text">en ingl&eacute;s y espa&ntilde;ol</p>
                        <a class="btn btn-primary btn-block" href="/tutoriales">Tutoriales <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>


                @if(Auth::user()->role_id == '1')
                <div class="card">
                    <i class="fas fa-envelope-open-text fa-5x pt-3 text-primary text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Newsletter</h5>
                        <p class="card-text">&nbsp;</p>
                        <a href="/newsletterPanel" class="btn btn-primary btn-block">Newsletter <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                @endif

                <div class="card">
                    <i class="fas fa-globe-americas fa-5x pt-3 text-primary text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Mapas NDVI</h5>
                        <p class="card-text">visualizar mapas</p>
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
</div>l
@endsection
