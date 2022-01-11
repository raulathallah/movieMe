<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {return view('landing');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/movies', [MovieController::class, 'getMovies']);
Route::get('/movies/{id}', [MovieController::class, 'getDetails']);
Route::get('/search', [HomeController::class, 'searchMovie']);

Route::middleware(['auth'])->group(function(){
    Route::get('/add-movie', [MovieController::class, 'getAddMovie']);
    Route::post('/add-movie', [MovieController::class, 'postAddMovie']);
    Route::post('/delete/{id}', [MovieController::class, 'postDeleteMovie']);
    Route::get('/movie-edit/{id}', [MovieController::class, 'getEditMovie']);
    Route::post('/movie-edited/{id}', [MovieController::class, 'postEditMovie']);
});

