<html>
<head>
    <title>Premium</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body class="bg-white" style="height: 85%;">

<div class="col-12 d-flex bg-white py-3 justify-content-around">
    <div class="col-5 d-flex display-inline">
        <a class="nav-link active" href="/">INICIO</a>
        <a class="nav-link active" href="/home">PANEL DE CONTROL</a>
        <a class="nav-link active" href="/terminosCondiciones" target="_blank">TERMINOS Y CONDICIONES</a>
    </div>

    <div class="col-7">
        <img src="/images/barra-vigor.jpeg" class="img-fluid" alt="Responsive image">
    </div>
</div>

<div class="h-100">
 <!--Inicio de Código ATB PREMIUM B2B v1.1-->
<script type="text/javascript">// <![CDATA[
        window.__atb_b2b_root = {};
        (function () {
			var currentScript = document.currentScript || (function() {
			  var scripts = document.getElementsByTagName('script');
			  return scripts[scripts.length - 1];
			})();
            var atb = document.createElement('script');
            atb.type = 'text/javascript';
            atb.async = true;
            atb.time=new Date();
            atb.src = '//index.agrotoolbox.com/b2b/wfp00014861GYD.js';
            var s = currentScript;			
            s.parentNode.insertBefore(atb, s);
			window.__atb_b2b_root.node=s.parentNode;
        })();
// ]]></script>
<!--Fin Código ATB PREMIUM B2B v1.1-->
</div>
</body>
</html>