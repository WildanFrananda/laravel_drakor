<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;
use App\Models\User;

class ReviewController extends Controller 
{
    public function index() 
    {
        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create() 
    {
        $movies = Movie::all();
        $users = User::all();
        return view('admin.reviews.create', compact('movies', 'users'));
    }

    public function store(Request $request) 
    {
    $validatedData = $request->validate([
        'movie_id' => 'required',
        'user_id' => 'required',
        'date' => 'required',
        'description' => 'required',
        'rating' => 'required|numeric',
    ]);

    Review::create($validatedData);
    return redirect('/admin/reviews')->with('success', 'Review added successfully!');
}

    public function edit(Review $review) 
    {
        $movies = Movie::all();
        $users = User::all();
        return view('admin.reviews.edit', compact('review', 'movies', 'users'));
    }

    public function update(Request $request, Review $review) 
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'description' => 'required',
            'rating' => 'required|numeric',
        ]);
    
        $review->update($validatedData);
        return redirect('/admin/reviews')->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review) 
    {
        $review->delete();
        return redirect('/admin/reviews')->with('success', 'Review deleted successfully!');
    }
}
