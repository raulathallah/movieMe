<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movie::create([
            'genre_id' => 1,
            'movie_name' => 'F9: The Fast Saga',
            'movie_poster' => 'f9.jpg',
            'movie_description' => "Dom and the crew must take on an international terrorist who turns out to be Dom and Mia's estranged brother.",
            'director' => 'Justin Lin',
            'cast' => 'Vin Diesel, John Cena, Jordana Brewster, Michelle Rodriguez',
            'duration' => '2h 25m',
            'year' => '2021'
        ]);
        Movie::create([
            'genre_id' => 1,
            'movie_name' => 'Kill It',
            'movie_poster' => 'killit.jpg',
            'movie_description' => "Do Hyun-jin investigates a serial murder and meets Soo-hyun disguised as a veterinarian. Bound by fate, the two set out to solve the connection that has linked them.",
            'director' => 'Nam Sung-woo, Ahn Ji-sook',
            'cast' => 'Jang Ki-yong, Nana, Roh Jeong-eul, David Lee Mclnnis',
            'duration' => '12 episodes (1h/episode)',
            'year' => '2019'
        ]);
        Movie::create([
            'genre_id' => 1,
            'movie_name' => 'Avengers: Endgame',
            'movie_poster' => 'endgame.jpg',
            'movie_description' => "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.",
            'director' => 'Anthony Russo, Joe Russo',
            'cast' => 'Chris Hemsworth, Scarlett Johansson, Chris Evans, Robert Downey Jr.',
            'duration' => '3h 1m',
            'year' => '2019'
        ]);
        Movie::create([
            'genre_id' => 2,
            'movie_name' => 'Home Alone',
            'movie_poster' => 'homealone.jpg',
            'movie_description' => "An eight-year-old troublemaker must protect his house from a pair of burglars when he is accidentally left home alone by his family during Christmas vacation.",
            'director' => 'John Hughes',
            'cast' => "Devin Ratray, Daniel Stern, Catherine O'Hara, Macaulay Culkin",
            'duration' => '1h 43m',
            'year' => '1990'
        ]);
        Movie::create([
            'genre_id' => 3,
            'movie_name' => 'Star Wars: The Force Awakens',
            'movie_poster' => 'starwars.jpg',
            'movie_description' => "A new order threatens to destroy the New Republic. Finn, Rey and Poe, backed by the Resistance and the Republic, must find a way to stop them and find Luke, the last surviving Jedi.",
            'director' => 'J.J. Abrams',
            'cast' => "Daisy Ridley, John Boyega, Adam Driver, Oscar Issac",
            'duration' => '2h 16m',
            'year' => '2015'
        ]);
        Movie::create([
            'genre_id' => 4,
            'movie_name' => 'Us',
            'movie_poster' => 'us.jpg',
            'movie_description' => "A family's serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.",
            'director' => 'Jordan Peele',
            'cast' => "Jordan Peele, Lupita Nyong'o, Winston Duke, Elisabeth Moss",
            'duration' => '2h 1m',
            'year' => '2019'
        ]);
        Movie::create([
            'genre_id' => 4,
            'movie_name' => 'Missing 9',
            'movie_poster' => 'missing9.jpg',
            'movie_description' => "People from Legend Entertainment fly on a private plane to a concert. The 9 people consists of entertainers and staff members. The plane then becomes involved in a mysterious crash. The 9 people survive, but are stranded on a deserted island.",
            'director' => 'Choi Byung-gil',
            'cast' => "Choi Tae-joon, Baek Jin-hee, Jung Kyung-ho, Chanyeol",
            'duration' => '16 episodes (1h/episode)',
            'year' => '2017'
        ]);
        Movie::create([
            'genre_id' => 5,
            'movie_name' => 'Start-Up',
            'movie_poster' => 'startup.jpg',
            'movie_description' => "Seo Dal Mi has dreams of becoming Korea's own Steve Jobs, and with her genius first love, an investor, and a business insider by her side, her dream may be closer than she thinks.",
            'director' => 'Oh Choong-hwan',
            'cast' => "Kim Seon-ho, Nam Joo-hyuk, Bae Suzy, Kang Han-na",
            'duration' => '16 episodes (1h/episode)',
            'year' => '2020'
        ]);
        Movie::create([
            'genre_id' => 5,
            'movie_name' => 'Madame Atoine: The Love Therapist',
            'movie_poster' => 'madame.jpg',
            'movie_description' => "A well-known psychologist and a fake fortune-teller, whose businesses just happen to share the same name and building, both undertake a war of pride.",
            'director' => 'Kim Yun-Cheol',
            'cast' => "Han Ye-seul, Sung Joon, Jinwoon, Lee Joo-hyung",
            'duration' => '16 episodes (1h/episode)',
            'year' => '2016'
        ]);
        Movie::create([
            'genre_id' => 5,
            'movie_name' => 'Where Stars Land',
            'movie_poster' => 'wsl.jpg',
            'movie_description' => "Two employees at the Incheon Airpot find themselves falling for one another.",
            'director' => 'Shin Woo-chul',
            'cast' => "Lee Je-hoon, Rowoon, Chae Soo-bin, Jang Hyun-sung",
            'duration' => '32 episodes (35m/episode)',
            'year' => '2018'
        ]);

    }
}
