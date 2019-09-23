@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center no-gutters">
        <div class="card col-md-6">
            <div class="card-header">Editar usuarios</div>
            <br>
            <form action="{{url('tasks', [$user->id])}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="row form-group justify-content-around">
                    <label class="col-md-2">Nombre:</label>
                    <input type="text" value="{{$user->name}}"betw class="form-control col-md-8" placeholder="Nombre">
                </div>
                <hr>
                <div class="row form-group justify-content-around">
                    <label class="col-md-2">Email:</label>
                    <input type="text" value="{{$user->email}}" class="form-control col-md-8"  placeholder="Email">
                </div>
                <hr>
                <div class="row form-group justify-content-around">
                    <label class="col-md-2">Rol:</label>
                        <select class="form-control col-md-8">
                            <option value="3">User</option>
                            <option value="2">Operator</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="form-group btn btn-primary">Guardar</button>
                </div>
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
