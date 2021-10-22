@extends('layouts.homeLayout')

@section('content')
<div class="jumbotron py-5">
    @if(Auth::user()->suscrito == '0')
        <h2 class="display-4">Suscribete a nuestro newsletter!</h2>
        <hr class="my-4">
        <p class="lead"></p>
        <a class="btn btn-success btn-lg" href="/suscribirse" role="button">Suscribirse</a>
    @endif

    @if(Auth::user()->suscrito == '1')
        <h3 class="display-4">Cancelar suscripcion</h3>
        <hr class="my-4">
        <p class="lead"></p>
        <a class="btn btn-success btn-lg" href="/desuscribirse" role="button">Cancelar suscripcion</a>
    @endif
</div>
@endsection
