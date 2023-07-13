<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Move to Heaven',
            'poster' => 'movetoheaven.jpg',
            'genre_id' => 1,
            'synopsys' => 'Han Geu Roo is an autistic 20-year-old. He works for his father’s business “Move To Heaven,” a company that specializes in crime scene cleanup, where they also collect and arrange items left by deceased people, and deliver them to the bereaved family.',
            'release_date' => '2021-05-14',
            'countries_id' => 1,
            'rating' => 9.2,
        ]);
        Movie::create([
            'title' => 'Weak Hero Class 1',
            'poster' => 'weak.jpg',
            'genre_id' => 2,
            'synopsys' => 'Yeon Shi Eun is a model student who ranks at the top of his high school. Physically, Yeon Shi Eun appears weak, but by using his wits and psychology, he fights against the violence that takes place inside and outside of his school.',
            'release_date' => '2022-11-18',
            'countries_id' => 1,
            'rating' => 9.1,
        ]);
        Movie::create([
            'title' => 'Hospital Playlist Season 2',
            'poster' => 'hospital.jpg',
            'genre_id' => 3,
            'synopsys' => 'Everyday is extraordinary for five doctors and their patients inside a hospital, where birth, death and everything in between coexist.',
            'release_date' => '2021-06-17',
            'countries_id' => 1,
            'rating' => 9.1,
        ]);
        Movie::create([
            'title' => 'Flower of Evil',
            'poster' => 'flower.jpg',
            'genre_id' => 1,
            'synopsys' => 'Although Baek Hee Sung is hiding a dark secret surrounding his true identity, he has established a happy family life and a successful career. He is a loving husband and doting father to his young daughter. But his perfect façade begins to crumble when his wife, Cha Ji Won, a homicide detective, begins investigating a string of serial murders from 15 years ago. Ji Won notices changes in Hee Sung’s behavior and begins to wonder if he could possibly be hiding something from her.',
            'release_date' => '2020-07-29',
            'countries_id' => 1,
            'rating' => 9.1,
        ]);
        Movie::create([
            'title' => 'Alchemy of Souls',
            'poster' => 'soul.jpg',
            'genre_id' => 3,
            'synopsys' => 'Set in a fictional country called Daeho that does not exist in history or on maps, it is about the love and growth of young mages as they overcome their twisted fates due to a forbidden magic spell known as the "alchemy of souls", which allows souls to switch bodies.',
            'release_date' => '2022-06-18',
            'countries_id' => 1,
            'rating' => 9.1,
        ]);
    }
}