@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="container d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" style="text-decoration: none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Movies</li>
            </ol>
        </nav>
        @guest
        <form action="/search" method="GET" class="m-0 align-items-center">
            <div class="d-flex">
                <div class="px-3"> 
                    <input type="text" id="search-box" name="param" style="width: 200px; height:38" class="form-control">
                </div>
                <input type="submit" class="btn btn-outline-secondary" value="Search">
            </div>
        </form>
            @else
            <form action="/search" method="GET" class="m-0 align-items-center">
                <div class="d-flex">
                    <div class="px-3"> 
                        <input type="text" id="search-box" name="param" style="width: 200px; height:38" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-outline-secondary" value="Search">
                </div>
            </form>
        @endguest
    </div>
    
    @if(Session::has('success'))
        <div class="alert alert-success m-5 p-3">
            <button type="button" class="close btn" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success!</strong> {{ Session::get('message', '') }}
        </div>
    @endif
    
    <div class="d-flex flex-wrap">
        @foreach ($movies as $item)
        <div class="card m-5" style="width: 20rem;">
            <img src="../storage/movie/{{$item->movie_poster}}" class="card-img-top" alt="..." style="height: 500px">
            <div class="card-body">
                <h5 class="card-title">{{$item->movie_name}}</h5>
                <p class="card-text text-muted">{{$item->genre_name}}</p>
                <p class="card-text" style="font-size: 14px">{{$item->movie_description}}</p> 
            </div>
            @guest
                <a href="/movies/{{$item->id}}" class="btn btn-primary p-3 m-3">Details</a>
                @else
                @if(Auth::user()->isAdministrator())
                <div class="card-footer">
                    <div class="d-grid gap-2 col mx-auto py-3">
                        <a href="/movies/{{$item->id}}" class="btn btn-primary" style="width:100%">Details</a>
                        <a href="/movie-edit/{{$item->id}}" class="btn btn-warning" style="width:100%">Edit Movie</a>
                        <form action="/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button style="width:100%" type="submit" value="delete-movie" class="btn btn-danger">Delete Movie</button>
                        </form>   
                    </div>
                </div>   
                @endif   
            @endguest
            
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center" style="position:absolute; transform:translateX(-50%); left:50%">
        {{ $movies->links('pagination::bootstrap-4') }}
    </div>
</div>
    

@endsection
