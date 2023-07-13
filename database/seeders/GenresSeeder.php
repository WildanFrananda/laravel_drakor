<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Drama',
            'description' => 'Genre of movies with emotional and serious themes'
        ]);
        Genre::create([
            'name' => 'Action',
            'description' => 'Genre of movies with that combines elements of both action and drama to create a compelling and intense cinematic experience'
        ]);
        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre of movies with that often explore emotional and serious themes related to love, relationships, and personal growth'
        ]);
    }
}
