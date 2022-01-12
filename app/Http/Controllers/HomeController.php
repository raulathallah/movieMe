<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }

    public function searchMovie(Request $request){
        
        $searchedMovie = Movie::where('movie_name', 'like', "%$request->param%")->paginate(6);

        $data = [
            'movies' => $searchedMovie
        ];

        return view('moviePage', $data);
    }
}
