@extends('layouts.app')

@section('content')

<div class="container">

    @if(Session::has('success'))
        <div class="alert alert-success my-5 p-3">
            <button type="button" class="close btn" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success!</strong> {{ Session::get('message', '') }}
        </div>
    @endif

    <h2 class="font-weight-bold my-3">Add New Genre</h2>
    
    <form action="/add-genre" method="POST">

        @csrf
        
        <div class="d-flex flex-row align-items-center">

            <label for="genre_name" class="me-5">Genre Name</label>
    
            <div class="d-flex flex-column" style="width: 30%">
                <input type="text" id="genre_name" class="form-control @error('genre_name') is-invalid @enderror" name="genre_name">
                @error('genre_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <button class="btn btn-primary my-3 ms-2" type="submit">Add Genre</button>
        </div>
    </form>

    <div class="mt-5">
        <p class="text-secondary mt-3">AVAILABLE GENRE</p>
        <div class="d-flex flex-wrap">
            @foreach($genre as $item)
            <div class="card me-4">
                <div class="card-body">
                    {{$item->genre_name}}
                </div>
                <div class="card-footer">
                    <form action="/delete-genre/{{$item->id}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" value="delete-movie" class="btn btn-danger btn-sm" >Delete</button>
                    </form>  
                </div>
                
            </div>
            @endforeach
        </div>  
    </div>
    
</div>

@endsection