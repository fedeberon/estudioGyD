@extends('errors.layout')

@php
  $error_number = 403;
  $error_description = "permisos denegados";
  $error_message ="ups. No tienes los permisos para entrar a esta pagina.";
@endphp

@section('title')
{{$error_description}}
@endsection

@section('content')
<div class="p-3 bg-light text-dark">
  <div class="text-center">
    <div class="">
      <div class="">
        <div class="">
          <h1>{{$error_message}}</h6>
          <h6 class="">Error: {{$error_number}}</h1>
        </div>
        <a href="/"><button type="button" class="btn btn-success">Volver al inicio</button></a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> or return to <a href='".url('')."'>our homepage</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection