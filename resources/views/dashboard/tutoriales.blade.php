@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tutoriales</div>
                <div class="card-body">
                    <div class="row text-center" style="font-size: 30px">
                       <span class="badge badge-danger col-2 offset-2 mb-1">Español</span>
                       <span class="badge badge-danger col-2 offset-4 mb-1">English</span>
                    </div>
                    <div class="row" style="height: 350px;">
                        <iframe class="col-6" src="https://www.youtube.com/embed/X2xiXA3ynpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe class="col-6" src="https://www.youtube.com/embed/84vqmWplZ6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="row">
                        <a href="https://youtu.be/X2xiXA3ynpQ" class="btn btn-danger col-2 offset-2 mt-1"><i style="font-size: 34px;" class="fab fa-youtube"></i></a>
                        <a href="https://www.youtube.com/watch?v=84vqmWplZ6k" class="btn btn-danger col-2 offset-4 mt-1"><i style="font-size: 34px;" class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
