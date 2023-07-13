<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        $movie = Movie::find(1);
        $favorites = Movie::whereIn('id', [1, 2, 3])->get();
        $genres = Genre::all();
        $movies = Movie::all();
        $reviews = Review::all();
        $users = User::all();
        return view("welcome", compact("movie", "movies", "genres", "reviews", "favorites", "users"));
    }
    public function about(Movie $movie) 
    {
        $favorites = Movie::whereIn('id', [1, 2, 3])->get();
        return view("about.index", compact("movie", "favorites"));
    }
    public function movies()
    {
        $movies = Movie::all();
        return view("movies.index",compact("movies"));
    }
    public function login()
    {
        return view("login.index");
    }

}
