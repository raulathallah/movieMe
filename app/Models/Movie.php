<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_name',
        'genre_id',
        'movie_poster',
        'movie_description',
        'director',
        'cast',
        'duration',
        'year',
    ];

    protected $table = 'movies';
}
