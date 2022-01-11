<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::create([
            'genre_name' => 'Action'
        ]);
        Genre::create([
            'genre_name' => 'Family'
        ]);
        Genre::create([
            'genre_name' => 'Sci-Fi'
        ]);
        Genre::create([
            'genre_name' => 'Horror'
        ]);
        Genre::create([
            'genre_name' => 'Romance'
        ]);
    }
}
