@extends('layouts.homeLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de usuarios</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">ID</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Suscrito</th>
                                    <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $usr)
                                    <tr style="text-align: center;">
                                        <td>{{$usr->id}}</td>
                                        <td>{{$usr->name}}</td>
                                        <td>{{$usr->email}}</td>
                                        <td>{{$usr->suscrito}}</td>
                                        <td>{{$usr->role_id}}</td>
                                        <td><a href="{{action('UsersController@edit', $usr->id)}}"><i class="far fa-edit" style="font-size: 18px"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
