@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><!--Usuario: {{$user->id}}--></div>
                    <div class="card-body">
                       <!-- <div>
                            <p>
                                <strong>ID:</strong> {{$user->id}} <br>
                                <strong>Nombre:</strong> {{$user->name}} <br>
                                <strong>Email:</strong> {{$user->email}} <br>
                                <strong>Rol:</strong> {{$user->role_id}}
                            </p>
                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
