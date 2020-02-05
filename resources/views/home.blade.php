@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header text-center">Panel de Control</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <!-- CARDS -->
                <div class="container">
                    <div class="row">
                        <div class="card-deck">

                            @if(Auth::user()->role_id == '1')
                                <div class="card">
                                    <i class="fas fa-users fa-5x pt-3 text-primary text-center"></i>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="card-title">Usuarios</h5>
                                                <p class="card-text">ver y editar usuarios</p>
                                            </div>
                                            <div class="col-12 text-center pt-3">
                                                <a class="btn btn-primary btn-block" href="{{action('UsersController@index')}}">Usuarios <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="card">
                                <i class="fas fa-chalkboard-teacher fa-5x pt-3 text-primary text-center"></i>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h5 class="card-title">Tutoriales</h5>
                                            <p class="card-text">en ingl&eacute;s y espa&ntilde;ol</p>
                                        </div>
                                        <div class="col-12 text-center pt-3">
                                            <a class="btn btn-primary btn-block" href="/tutoriales">Tutoriales <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <i class="fas fa-globe-americas fa-5x pt-3 text-primary text-center"></i>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h5 class="card-title">Mapas NDVI</h5>
                                            <p class="card-text">visualizar mapas</p>
                                        </div>
                                        <div class="col-12 text-center pt-3">
                                            @if(Auth::user()->role_id != '2')
                                                <a href="/regular" class="btn btn-primary btn-block">Regular <i class="fas fa-chevron-right"></i></a>
                                            @endif

                                            @if(Auth::user()->role_id != '3')
                                                <a href="/premium" class="btn btn-warning btn-block">Premium <i class="fas fa-chevron-right"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(Auth::user()->role_id == '1')
                            <div class="card">
                                <i class="fas fa-envelope-open-text fa-5x pt-3 text-primary text-center"></i>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h5 class="card-title">Newsletter</h5>
                                            <p class="card-text">&nbsp;</p>
                                        </div>
                                        <div class="col-12 text-center pt-3">
                                            <a href="/newsletterPanel" class="btn btn-primary btn-block">Newsletter<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="container">
    <nav class="navbar fixed-bottom navbar-light bg-light">

        <div class="icon">
            <a class="navbar-link text-primary pr-5 tetx-left" href="http://facebook.com/estudiogy.d" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>

        <div class="icon">
            <a class="navbar-link text-danger pr-5 tetx-left" href="http://www.youtube.com/user/estudiogyd" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

        <div class="icon">
            <a class="navbar-link text-secondary pr-5 tetx-left" href="https://www.linkedin.com/in/mariano-delbuono-b95b1b22/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>


            <a class="d-none d-md-block text-right navbar-link" href="https://web.whatsapp.com/send?phone=5492494697996&amp;text=Hola, necesito hacerles una consulta..." target="_blank"><i class="fab fa-whatsapp"></i> Consúltenos por WhatsApp</a>
            <a class="d-sm-none text-right navbar-link" href="https://wa.me/5492494697996?text=Hola,%20necesito%20hacerles%20una%20consulta..." target="_blank"><i class="fab fa-whatsapp"></i> Consúltenos por WhatsApp</a>

            <a class="navbar-link text-dark"></a>
            <a class="navbar-link text-dark">Avellaneda 351</a>

            <a class="navbar-link text-dark">+54 249 4447899</a>

        <div class="icon">
            <a href="#" class="navbar-link text-dark text-right" data-toggle="modal" data-target="#contactoModal"><i class="fas fa-qrcode"></i></a>
        </div>

    </nav>
</div>


<!-- MODAL -->
<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="row modal-body justify-content-center">
                <img src="images/qrcode.png" style="width: 70%" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<style>
    .icon{
        font-size: 20px;
    }

</style>
@endsection
