@extends('layouts.app')

@section('content')
    <form action="/movie-edited/{{$selectedMovie->id}}" method="POST">
        @csrf
        <div class="p-5 m-5 d-flex">
            <div class="text-center mx-5">
                <p class="my-4 fw-bold fs-1">{{$selectedMovie->movie_name}}</p>
                <img src="../storage/movie/{{$selectedMovie->movie_poster}}" alt="" style="width:600px">
            </div>
            <div class="card p-5" style="width: 100%;">
                <div class="card-body">
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Poster</label>
                        <div class="col-sm-10">
                            <input type="file" id="movie_poster" class="@error('movie_poster') is-invalid @enderror" name="movie_poster" style="border: none" value="{{$selectedMovie->movie_poster}}">
                            @error('movie_poster')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" id="movie_name" class="form-control @error('movie_name') is-invalid @enderror" name="movie_name" value="{{$selectedMovie->movie_name}}">
                            @error('movie_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Genre</label>
                        <div class="col-sm-10">
                            <select name="genre" id="genre" style="width: 200px" class="form-select">
            
                                @foreach ($genre as $item)
                                    <option value="{{ $item->id }}">{{ $item->genre_name}}</option>   
                                @endforeach
                    
                            </select>
            
                            @error('genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Director</label>
                        <div class="col-sm-10">
                            <input type="text" id="director" class="form-control @error('director') is-invalid @enderror" name="director" value="{{$selectedMovie->director}}">
                            @error('director')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Cast</label>
                        <div class="col-sm-10">
                            <input type="text" id="cast" class="form-control @error('cast') is-invalid @enderror" name="cast" value="{{$selectedMovie->cast}}">
                            @error('cast')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Duration</label>
                        <div class="col-sm-10">
                            <input type="text" id="duration" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{$selectedMovie->duration}}">
                            @error('duration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Year</label>
                        <div class="col-sm-10">
                            <input type="text" id="year" class="form-control @error('year') is-invalid @enderror" name="year" value="{{$selectedMovie->year}}">
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row p-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea id="movie_description" class="form-control @error('movie_description') is-invalid @enderror" name="movie_description" cols="28" rows="8">
                                {{$selectedMovie->movie_description}}
                            </textarea>
            
                            @error('movie_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <a href="{{ url('/movies')}}" class="btn btn-danger mx-2">Cancel</a>
                    <button class="btn btn-primary mx-2" type="submit">Save</button>
                </div>
            </div>

        </div>
    </form>
@endsection