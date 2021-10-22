@extends('layouts.navbarLayout')

@section('content')

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis leo malesuada, fringilla ligula eu, elementum mauris.</p>
            <hr class="my-4">
            <p>Vivamus efficitur laoreet neque rhoncus tristique.</p>
            <a class="btn btn-primary btn-lg" href="/register" role="button">Registrarse</a>
            <a class="btn btn-primary btn-lg" href="/guest" role="button">Ir al mapa</a>
        </div>
    </div>
</div>

@endsection

