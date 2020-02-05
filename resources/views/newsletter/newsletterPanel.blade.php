@extends('layouts.navbarLayout')

@section('content')
<div class="jumbotron">
    @if(Auth::user()->suscrito == '1')


    <div class="jumbotron">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-4 mx-auto">
                    <form action={{route('newsletterEmail')}} method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <h2>Enviar Newsletter</h2>
                            <div class="form-group col-7">
                                <label for="name">Titulo</label>
                                <input class="form-control" type="text" name="titulo" required>
                            </div>
                            <div class="form-group col-7">
                                <label for="name">Subtitulo</label>
                                <input class="form-control" type="text" name="subtitulo" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Cuerpo</label>
                                <textarea class="form-control" style="height: 200px;" type="text"  name="cuerpo"required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" id='btn-contact' class="btn btn-primary col-6 ml-3" data-toggle="modal" data-target="#news">Enviar</button>
                        </div>
                    </form>
                    <hr>
                    <a href='javascript:history.back()'>pagina anterior</a>
                </div>
            </div>

            <div class="modal fade" id="news" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content align-items-center">
                        <div class="modal-header">
                            <h5 class="modal-title">Enviando...</h5>
                        </div>
                        <div class="modal-body">
                            <img src="images/loading.gif" style="width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
