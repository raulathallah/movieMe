@extends('layouts.app')

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" style="text-decoration: none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/movies')}}" style="text-decoration: none">Movies</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$movies->movie_name}}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col">
                <img src="../storage/movie/{{$movies->movie_poster}}" alt="" width="550px">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <p class="fs-2 fw-bold m-0">{{$movies->movie_name}}</p>
                    </div>
                    <div class="card-body">
                        <p>{{$movies->movie_description}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Genre</p>
                            </div>
                            <div class="col-9">
                                <p>{{$movies->genre_name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Year</p>
                            </div>
                            <div class="col-9">
                                <p>{{$movies->year}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Duration</p>
                            </div>
                            <div class="col-9">
                                <p>{{$movies->duration}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Director</p>
                            </div>
                            <div class="col-9">
                                <p>{{$movies->director}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Cast</p>
                            </div>
                            <div class="col-9">
                                <p>{{$movies->cast}}</p>
                            </div>
                        </div>
                    </div>   
            </div>
        </div>
    </div>
    

@endsection
