<html>
<head>
    <title>Regular</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
          <script>
    $(window).on('load',function(){
    var delayMs = 1500; // delay in milliseconds
    
    setTimeout(function(){
        $('#myModal').modal('show');
    }, delayMs);
    });
</script>
</head>
<body class="bg-white" style="height: 85%;">

<div class="col-12 d-flex bg-white py-3 justify-content-around">
    <div class="col-5 d-flex display-inline">
        <a class="nav-link active" href="/">INICIO</a>
        @auth
        <a class="nav-link active" href="/home">PANEL DE CONTROL</a>
        @endauth
        <a href="#" class="nav-link active" data-toggle="modal" data-target="#subscribirseAPremium" >SUSCRIBIRSE A PREMIUM</a>
        <a class="nav-link active" href="/terminosCondiciones" target="_blank">TERMINOS Y CONDICIONES</a>
    </div>

    <div class="col-7">
        <img src="/images/barra-vigor.jpeg" class="img-fluid" alt="Responsive image">
    </div>
</div>

<div class="h-100">

<!--Inicio de Código ATB REGULAR B2B v1.1-->
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
            atb.src = '//index.agrotoolbox.com/b2b/wff09524571GYD.js';
            var s = currentScript;			
            s.parentNode.insertBefore(atb, s);
			window.__atb_b2b_root.node=s.parentNode;
        })();
// ]]></script>
<!--Fin Código ATB REGULAR B2B v1.1--> 
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title"><img src="\images\general\logo-top.png" height="60" width="60"> Bienvenido</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <p>
                Ud. est&aacute; ingresando a la plataforma gratuita de im&aacute;genes satelitales de G&D que le permitir&aacute; poder evaluar el potencial productivo de establecimientos
                 agr&iacute;colas  y ganaderos o detectar problemas tanto sanitarios como nutricionales de 
                cualquier  cultivo en cualquier momento de su ciclo sin importar el lugar del mundo en que este se encuentre.
            </p>
            </div>
            <div class="modal-footer">No estas registrado?&nbsp;<a href="/register"> Crear una cuenta</a></div>
        </div>
    </div>
</div>

<div class="modal fade" id="subscribirseAPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><span class="badge badge-warning">Suscribete a nuestro servicio premium</span></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h4><span class="badge badge-success">Ventajas del servicio premium</span></h4>
                <ul>
                    <li>
                    El Abono mensual m&aacute;s bajo del mercado
                    </li>

                    <li>
                    Acceso sin restricción de superficie
                    </li>

                    <li>
                    Sin l&iacute;mites de consultas 
                    </li>

                    <li>
                    Permite guardar los lotes marcados
                    </li>

                    <li>
                    Permite asociar a cada lote su nombre, el cultivo y una descripci&oacute;n
                    </li>

                    <li>
                    Soporte t&eacute;cnico 7x24
                    </li>

                    <li>
                    Personalizaci&oacute;n del acceso
                    </li>
                    
                    <li>
                    Importante bonificaci&oacute;n por paquete de usuarios
                    </li>
                </ul>

                <div class="d-flex justify-content-center modal-footer">
                    <a href="/cotizacion" class="btn btn-success">Solicitar cotizaci&oacute;n</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script>
$( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>
</html>