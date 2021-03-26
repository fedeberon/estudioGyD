@extends('layouts.navbarLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">

        <div class="col-md-6 d-md-none">
            <img src="/maquetacion/p-ganaderia-precision/bg-intro-ganaderia.png" class="img-fluid float-right" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">SERVICIOS</h6>
                <h2 class="text-white montserrat700">GANADER&Iacute;A DE PRECISI&Oacute;N</h2>
                <h4 class="text-white montserrat300">
                    El resultado de todo negocio se logra midiendo las variables que afectan la producción y siendo eficientes en el uso de los recursos. G&D desarrollo tecnologías que permiten poder generar información precisa para la medición y monitoreo animal, lo que se conoce hoy como IoT. Otra herramienta desarrollada por G&D apunta al conteo animal con el fin de conocer realmente la carga animal de un lote o para la realización de auditorías sin necesidad de mover los animales y de esta manera estos no sufran por esta actividad de conteo. Estas alternativas tecnológicas justamente buscan mejorar la eficiencia y generan las métricas necesarias para la correcta toma
                    de decisiones.
                </h4>
                </p>
            </div>
        </div>

        <div class="col-md-6 d-none d-md-block">
            <img src="/maquetacion/p-ganaderia-precision/bg-intro-ganaderia.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h4 class="barlow700 pt-4 pb-3">CONTEO DE GANADO</h4>
            <h5 class="barlow300">
                Utilizando técnicas de inteligencia artificial y las imágenes provistas por un drone, G&D desarrollo un algoritmo de conteo que permite conocer
                la cantidad de animales presentes dentro de un lote de manera rápida.
            </h5>

            <h5 href="" class="barlow300 pt-3 underlined"><u>MAS INFORMACIÓN EN LA SIGUIENTE NOTA ></u></h5>

        </div>

        <div class="col-md-10 pt-3 pb-5">
            <div class="row">
                <div class="col-md-6 pb-4">
                    <img src="/maquetacion/p-ganaderia-precision/conteo-ganado-1.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <img src="/maquetacion/p-ganaderia-precision/conteo-ganado-2.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-12 rounded shadow">
                    <video controls width="100%" height="90%" class="pt-3">
                        <source src="/maquetacion/p-ganaderia-precision/video/conteo de ganado.mp4" type="video/mp4">
                    </video>

                    <h5 class="barlow600 pt-2">SOFTWARE DE CONTEO DE GANADO</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center pt-2 pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-nav pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h4 class="barlow700 pt-4 pb-3">COLLAR GANADERO</h4>
            <h5 class="barlow300">
                El monitoreo animal permite poder estar conectado  a estos en forma permanente y de esta forma saber de manera
                temprana cualquier problema que se presente, también permite evitar el robo de los animales gracias a las alertas que se generan.
                En esta nueva era digital, estar conectado a nuestros animales genera grandes ahorros de tiempo y dinero.
            </h5>
        </div>

        <div class="col-md-10 pt-3 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <img src="/maquetacion/p-ganaderia-precision/collar-ganadero.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-12">
        <div class="row d-flex justify-content-center pb-3 pt-4">
            <div class="col-md-10">
                <div class="col-md-6 float-left">
                    <h5 class="barlow700">Que podemos medir</h5>
                    <br>
                    <h5 class="barlow300">- Frecuencia de reporte (configurable)</h5>
                    <h5 class="barlow300">- Conteo de animales</h5>
                    <h5 class="barlow300">- Collar fuera del animal, esto indica que el collar se desprendió del animal por la razón que sea y cuando esto sucede se reporta esta alerta.</h5>
                    <h5 class="barlow300">- Animal fuera de le perímetro, se puede configurar que el collar debe estar en un perímetro determinado y cuando este collar abandona el perímetro te envía una alerta</h5>
                    <h5 class="barlow300">- Cantidad de km caminados de cada animal</h5>
                    <h5 class="barlow300">- Alerta por aumento en los km caminados</h5>
                    <h5 class="barlow300">- Alerta por una disminución de los km caminados</h5>
                    <h5 class="barlow300">- Cantidad de tiempo en movimiento</h5>
                    <h5 class="barlow300">- Cantidad de tiempo quieto</h5>
                    <h5 class="barlow300">- Cantidad de tiempo acostado</h5>
                    <h5 class="barlow300">- Alerta por animal quieto o acostado por un periodo de tiempo configurable</h5>
                </div>

                <div class="col-md-6 float-right">
                    <h5 class="barlow700">Para qu&eacute; medirlos</h5>
                    <br>
                    <h5 class="barlow300">Todas estos datos te permiten inferir que le pasa al animal, por ejemplo si envía una alerta por animal quieto puede ser que este muerto
                        o con problemas de movilidad o con un parto dificultoso, si envía una alerta por aumento en los km caminados puede ser que el animal este
                        entrando en celo, si el animal esta mucho tiempo acostado puede ser también problemas de parto, si bajan los km caminados puede ser que este
                        enfermo o con problemas de movilidad.
                    </h5>
                    <h5 class="barlow300">Si el animal se reporta como que esta fuera del perímetro puede ser que se lo esté robando o que se pasó
                        a un lote donde no debería estar, o a la hora de cambiar de lote aún está en el lote anterior.
                    </h5>
                </div>
            </div>
            <div class="col-md-10 pt-3 pb-5">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/maquetacion/p-ganaderia-precision/perimetro-virtual.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-2 pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>

@endsection
