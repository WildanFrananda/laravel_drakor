<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => 1,
            'user_id' => 1,
            'date' => '2021-05-14',
            'description' => 'This is a great movie!',
            'rating' => 9.2,
        ]);
        Review::create([
            'movie_id' => 2,
            'user_id' => 1,
            'date' => '2021-11-22',
            'description' => 'is praised for its compelling storyline, great acting, and intense action sequences',
            'rating' => 9.2,
        ]);
        Review::create([
            'movie_id' => 3,
            'user_id' => 1,
            'date' => '2022-01-16',
            'description' => 'The finale is excellent and wraps up each character\'s story well',
            'rating' => 9.2,
        ]);
    }
}
