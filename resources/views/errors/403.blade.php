<html>
<head>
    <title>ERROR 403</title>
</head>
<body>
@php
  $error_number = 403;
@endphp

@section('title')
  Forbidden.
@endsection

@section('description')
  @php
    $default_error_message = "No tienes los permisos necesarios para acceder a esta pagina, vuelve a la <a href='javascript:history.back()''>pagina anterior</a> o ve a la <a href='".url('')."'>pagina de inicio</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
</body>
</html>
