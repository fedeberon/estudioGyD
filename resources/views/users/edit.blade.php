@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center no-gutters">
        <div class="card col-md-6">
            <div class="card-header">Editar usuarios</div>
            <br>
            <form method="POST" action="{{ route('users.update',$user->id) }}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="row form-group justify-content-around">
                    <label class="col-md-2">Nombre:</label>
                    <input type="text" value="{{$user->name}}" name="name" class="form-control col-md-8" placeholder="Nombre">
                </div>
                <hr>
                <div class="row form-group justify-content-around">
                    <label class="col-md-2">Email:</label>
                    <input type="text" value="{{$user->email}}" name="email" class="form-control col-md-8"  placeholder="Email">
                </div>
                <hr>

                <div class="row form-group justify-content-around">
                    Rol:
                    <div><input type="radio" name="role_id" value="1"> Admin </div>
                    <div><input type="radio" name="role_id" value="2"> Premium </div>
                    <div><input type="radio" name="role_id" value="3"> Free </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Guardar</button>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
