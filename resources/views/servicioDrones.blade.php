@extends('layouts.navbarLayout')

@section('content')
<div class="container d-flex justify-content-between col-md-12 bg-intro pr-0">
    <div class="row no-gutters">

        <div class="col-md-6 d-md-none">
            <img src="/maquetacion/p-drones-servicio/bg-intro-drones-servicio.png" class="img-fluid float-right" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <div class="p-5" id="productosDrones">
                <p class="text-white pl-5 pt-5">
                <h6 class="text-success montserrat300">DRONES</h6>
                <h2 class="text-white montserrat700">REALIDAD VIRTUAL</h2>
                <h4 class="text-white montserrat300">
                    Los drones tienen múltiples usos para diferentes rubros, permitiendo a las empresas contar con el servicio profesional  de G&D y su amplia experiencia, para cubrir la demanda de cada sector.
                </h4>
                </p>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="/maquetacion/p-drones-servicio/bg-intro-drones-servicio.png" class="img-fluid float-right" alt="Responsive image">
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        AGRICULTURA
                    </h4>
                    <h5 class="barlow300">
                        Utilizando cámaras multiespectrales se obtienen bandas del espectro infra rojo y del espectro visible. Con la combinación de estas podemos lograr imágenes de NDVI y otras del tipo RGB. Las primeras nos brindan la posibilidad de saber si nuestros cultivos tienen algún problema y asi con su ubicación podemos determinar agronómicamente que practicas aplicar para corregir el problema de manera temprana. Con las imágenes RGB se obtienen datos desde el espectro visible para identificar otro tipo de situaciones dentro de nuestro cultivo.
                    </h5>
                </div>
                <div class="col-md-10 p-3 bg-white">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/maquetacion/p-drones-servicio/banner-drones-agricultura.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-6 pb-4">
                                <h4 class="barlow700 pt-4 pb-3">INDICE VERDE</h4>
                                <img src="/maquetacion/p-drones-servicio/drones-indiceverde.jpg" class="img-fluid" alt="Responsive image">
                                <h5 class="barlow300 pt-3">
                                    Las cámaras multiespectrales tienen varios sensores donde cada uno registra un fragmento determinado del espectro electromagnético. Estos sensores captan la energía reflejada por el sol sobre la superficie de la Tierra en cada recorrido del drone. Esta información se procesa y se digitaliza para generar las distintas capas de datos para su posterior tratamiento de correcciones y análisis.
                                </h5>
                            </div>
                            <div class="col-md-6"><h4 class="barlow700 pt-4 pb-3">MAPEO DE MALEZAS</h4>
                                <img src="/maquetacion/p-drones-servicio/drones-mapeomalezas.jpg" class="img-fluid" alt="Responsive image">
                                <h5 class="barlow300 pt-3">
                                    Utilizando las imágenes de nuestros drones, realizando el vuelo sobre el lote antes de la siembra podemos identificar las zonas cubiertas por malezas. Gracias a esto podemos construir un mapa de malezas el cual al estar georreferenciado permite poder confeccionar una prescripción de aplicación de herbicida que se carga en la computadora del aplicador y asi generar un ahorro de agroquímicos y un menor impacto ambiental.
                                </h5>
                            </div>
                            <div class="col-md-12"><h4 class="barlow700 pt-4 pb-3">RELEVAMIENTO DE ENSAYOS</h4>
                                <img src="/maquetacion/p-drones-servicio/drones-relevamientos.jpg" class="img-fluid" alt="Responsive image">
                                <h5 class="barlow300 pt-3">
                                    Gracias a los drones hoy podemos obtener imágenes aéreas de gran calidad y resolución no solo de lotes de grandes superficies sino que además podemos obtener las mismas imágenes de parcelas o ensayos de cultivos de muy pequeñas dimensiones que permiten a las empresas poder evaluar el comportamiento de sus diferentes tratamientos con una capa más de información como son las imágenes de Índice Verde.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12 bg-white">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 pt-4 pb-3">RECORRIDO VIRTUAL</h4>
                </div>
                <div class="col-md-12 p-3 bg-white rounded shadow">

                    <div class="row">
                        <div class="col-12">
                            <video controls width="100%" height="90%">
                                <source src="/maquetacion/p-drones-servicio/CoordTrackerV1.1.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="col-12">
                            <h5 class="barlow300">
                                Nuestro sistema permite poder procesar y georreferenciar el video generado por un drone de manera rápida y precisa, de esta manera la información puede ser analizada ni bien el drone aterriza. Gracias a la georreferenciación podemos determinar las coordenadas de los lugares sobre los cuales se detecta algún problema dentro de los lotes, y así rápidamente poder actuar, si necesidad de grandes procesos de generación de mosaicos fotográficos
                            </h5>
                        </div>
                    </div>
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
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        CATASTRO
                    </h4>
                    <h5 class="barlow300">
                        Las imágenes generadas por un drone de áreas urbanas nos permiten poder realizar estudios catastrales de ciudades, y así poder determinar cómo están conformadas las parcelas que componen el ejido urbano.
                    </h5>
                </div>
                <div class="col-md-10 p-3 bg-nav">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <img src="/maquetacion/p-drones-servicio/drones-catrasto-01.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-6">
                                <img src="/maquetacion/p-drones-servicio/drones-catrasto-02.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        COMPAÑÍA DE SEGUROS
                    </h4>
                    <h5 class="barlow300">
                        Con nuestros drones podemos determinar la superficie dañada de un cultivo con extrema precisión y rapidez, gracias a la resolución de nuestras cámaras que logran imágenes con un pixel de 2 a 4 cm, podemos calcular la superficie dañada sobre el lote. Podemos saber cuántas hectáreas se vieron afectadas por viento, granizo, heladas entre otros daños, y así la compañía de seguros tiene un dato objetivo auditable del daño, logrando un registro digital que sirve de apoyo técnico al resultado.
                    </h5>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <img src="/maquetacion/p-drones-servicio/drones-seguros-01.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-6">
                                <img src="/maquetacion/p-drones-servicio/drones-seguros-02.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-nav pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        GANADERÍA
                    </h4>
                    <h5 class="barlow300">
                        El procesar las imágenes provistas por un drone por determinados algoritmos de inteligencia artificial desarrollados por G&D permiten obtener la cantidad de animales presentes sobre el área relevada por el drone.
                    </h5>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-12 pb-4">
                                <img src="/maquetacion/p-drones-servicio/drones-ganaderia.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        INSPECCIÓN DE EDIFICIOS
                    </h4>
                    <h5 class="barlow300">
                        Con nuestros drones podemos inspeccionar la fachada de los edificios para evaluar el estado de la mampostería, detectar fisuras, humedad o elementos sueltos que representen un potencial peligro a las personas.
                    </h5>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-12 pb-4">
                                <img src="/maquetacion/p-drones-servicio/drones-edificios.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-nav pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-1">
                    <h4 class="barlow700 text-uppercase pt-4">
                        OIL&GAS
                    </h4>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pb-3">
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <h4 class="barlow700 text-uppercase pt-4 pb-3">
                                    GAS
                                </h4>
                                <img src="/maquetacion/p-drones-servicio/drones-gas-01.jpg" class="img-fluid" alt="Responsive image">
                                <h5 class="barlow300">
                                    Mapeo de gasoductos para evaluar las construcciones existentes a cada lado de la traza o el estado de la infraestructura
                                </h5>
                            </div>
                            <div class="col-md-6 pb-4">
                                <h4 class="barlow700 text-uppercase pt-4 pb-3">
                                    RELEVAMIENTO DE ANTORCHAS
                                </h4>
                                <img src="/maquetacion/p-drones-servicio/drones-gas-02.jpg" class="img-fluid" alt="Responsive image">
                                <h5 class="barlow300">
                                    Relevamiento de Antorchas con cámaras térmicas y RGB sin necesidad de generar una parada de planta. De esta manera se evalúan los diferentes componentes y su estado
                                </h5>
                            </div>
                            <div class="col-md-12 p-3 bg-white rounded shadow">
                                <div class="row">
                                    <div class="col-12">
                                        <video controls width="100%" height="80%" class="pt-3">
                                            <source src="/maquetacion/p-drones-servicio/vista superior.mp4" type="video/mp4">
                                        </video>
                                    </div>

                                    <div class="col-12">
                                        <h4 class="barlow700 pt-4 pb-3">INSPECCION DE TORRES</h4>
                                        <h5 class="barlow300">
                                            Relevamiento de Torres y equipos dispuestos en las mismas para evaluar la correcta instalación de todas sus componentes.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-2 pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-white pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        TOPOGRAFÍA
                    </h4>
                    <h5 class="barlow300">
                        Gracias a la gran capacidad operativa de nuestros drones podemos cubrir grandes superficies de terreno y así lograr obtener información para generar mapas topográficos y Modelos digitales de elevación.
                    </h5>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <img src="/maquetacion/p-drones-servicio/drones-topografia-01.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-6">
                                <img src="/maquetacion/p-drones-servicio/drones-topografia-02.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>

<div class="container col-md-12 bg-nav pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <h4 class="barlow700 text-uppercase pt-4 pb-3">
                        NUESTROS EQUIPOS
                    </h4>
                    <h5 class="barlow300">
                        Homologados por ANAC
                    </h5>
                </div>
                <div class="col-md-10 p-3">
                    <div class="col-md-12 pt-3 pb-3">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-5 bg-white">
                                <img src="/maquetacion/p-drones-servicio/dron-explorerpro.jpg" class="img-fluid" alt="Responsive image">
                                <a href="/explorerpro"><h5 class="card-title text-success montserrat300">DRON <span class="montserrat600">XPLORER PRO</span><i class="fas fa-chevron-circle-right text-right text-dark pl-2"></i></h5></a>
                            </div>
                            <div class="col-md-5 bg-white">
                                <img src="/maquetacion/p-drones-servicio/dron-explorer.jpg" class="img-fluid" alt="Responsive image">
                                <a href="/explorer"><h5 href="/explorer" class="card-title text-success montserrat300">DRON <span class="montserrat600">XPLORER</span><i class="fas fa-chevron-circle-right text-right text-dark pl-2"></i></h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <a href="/consulta" class="btn btn-lg btn-success text-white montserrat600 rounded-0">CONSULTENOS</a>
    </div>
</div>
@endsection
