<html>
<head>
    <title>ERROR 403</title>

    <style>
        html, body {
            background-color: #383838;
            color: #D3D3D3;
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<h2>
    Error 403
</h2>
  @php
    $default_error_message = "!Ups¡. No tienes los permisos necesarios para acceder a esta pagina, vuelve a la
        <a href='javascript:history.back()''>pagina anterior</a> o ve a la <a href='".url('')."'>pagina de inicio</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
</body>
</html>
