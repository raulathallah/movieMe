<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    //
    public function getMovies(){

        $allMovie = Movie::join('genres', 'genres.id', "=", 'movies.genre_id')->select([
            'movies.*',
            'genres.genre_name'
        ])->paginate(6);

        $data = [
            'movies' => $allMovie
        ];

        return view('moviePage', $data);
    }

    public function getDetails(Request $request){

        $id = $request->id;
        $detail = Movie::join('genres', 'genres.id',"=", 'movies.genre_id')->where('movies.id', $id)->first();

        $data = [
            'movies' => $detail
        ];

        return view('movieDetail', $data);
    }

    public function getAddMovie(){
        $allMovie = Genre::all();

        $data = [
            'genre' => $allMovie
        ];

        return view('addMovie', $data);
    }

    public function postAddMovie(Request $request){
        $rules = Validator::make($request->all(), [
            'movie_poster' => ['required', 'image'],
            'movie_name' => ['required'],
            'genre' => ['required'],
            'director' => ['required'],
            'cast' => ['required'],
            'duration' => ['required'],
            'year' => ['required'],
            'movie_description' => ['required']
        ]);

        $rules->validate();

        $image = $request->file('movie_poster');

        $objMovie = new Movie;

        $objMovie->movie_name = $request->movie_name;
        $objMovie->movie_description = $request->movie_description;
        $objMovie->genre_id = $request->genre;
        $objMovie->movie_poster = $image->getClientOriginalName();
        $objMovie->director = $request->director;
        $objMovie->cast = $request->cast;
        $objMovie->duration = $request->duration;
        $objMovie->year = $request->year;

        Storage::putFileAs('public/movie', $image, $image->getClientOriginalName());
        $objMovie->save();

        return redirect('/movies')->with('success', true)->with('message', 'Movie added.');;
    }

    public function postDeleteMovie(Request $request){

        $id = $request->id;
        $selectedMovie = Movie::where('id', $id)->first();

        $selectedMovie->delete();

        return redirect('/movies')->with('success', true)->with('message', 'Movie removed.');
    }

    public function getEditMovie(Request $request){
        $id = $request->id;
        $selectedMovie = Movie::where('id', $id)->first();
        $genre = Genre::all();
        
        $data = [
            'selectedMovie' => $selectedMovie,
            'genre' => $genre
        ];

        return view('editMovie', $data);
    }

    public function postEditMovie(Request $request){

        $id = $request->id;

        $name = $request->movie_name;
        $genre = $request->genre;
        $director = $request->director;
        $cast = $request->cast;
        $duration = $request->duration;
        $year = $request->year;
        $description = $request->movie_description;

        Movie::where('id', $id)->first()->update([
            'movie_name' => $name,
            'genre_id' => $genre,
            'director' => $director,
            'cast' => $cast,
            'duration' => $duration,
            'year' => $year,
            'movie_description' => $description
        ]);

        return redirect('/movies')->with('success', true)->with('message', 'Movie updated.');
    }
}
