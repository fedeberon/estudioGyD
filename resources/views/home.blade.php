@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

           <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row" style="height: 250px;">

                        @if(Auth::user()->role_id == '1')
                            <div class="card col-4">
                                <i class="fas fa-users text-primary" style="font-size: 500%; text-align: center"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Usuarios</h5>
                                    <p class="card-text">ver y editar usuarios</p>
                                    <a class="btn btn-primary" href="index">Usuarios <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        @endif

                            <div class="card col-4">
                                <i class="fas fa-chalkboard-teacher text-primary" style="font-size: 500%; text-align: center"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Tutoriales</h5>
                                    <p class="card-text">en ingles y español</p>
                                    <a href="/tutoriales" class="btn btn-primary">Tutoriales <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>

                            <div class="card col-4">
                                <i class="fas fa-globe-americas text-primary" style="font-size: 500%; text-align: center"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Mapas</h5>
                                    <p class="card-text">visualisar mapas</p>
                                    <div >
                                        @if(Auth::user()->role_id == '3')
                                        <a href="/regular" class="tn btn-primary">regular<i class="fas fa-chevron-right"></i></a>
                                        @endif

                                        @if(Auth::user()->role_id == '2')
                                        <a href="/premium" class="btn btn-warning">premium<i class="fas fa-chevron-right"></i></a>
                                        @endif

                                        @if(Auth::user()->role_id == '1')
                                        <a href="/regular" class="btn btn-secondary">regular<i class="fas fa-chevron-right"></i></a>
                                        @endif

                                        @if(Auth::user()->role_id == '1')
                                        <a href="/premium" class="btn btn-secondary">premium<i class="fas fa-chevron-right"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
