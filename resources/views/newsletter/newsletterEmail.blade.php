<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<h1>ESTUDIO G&D</h1>
<h2>{{$titulo}}</h2>
<h3>{{$subtitulo}}</h3>
<h4>{{$cuerpo}}</h4>
<a href="http://estudiogyd.com.ar/newsletter">Anular suscripcion</a>
</body>
</html>
