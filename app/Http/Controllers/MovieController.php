<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller 
{
    public function index() 
    {
        $movies = Movie::all();
        
        return view('admin.movies.index', compact('movies'));
    }

    public function create() 
    {
        $genres = Genre::all();
        $countries = Country::all();

        return view('admin.movies.create', compact('genres', 'countries'));
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required|image',
            'genre_id' => 'required',
            'synopsys' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('admin/assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }

        Movie::create($validatedData);
        return redirect('/admin/movies')
            ->with('success', 'Movie added successfully!');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie) 
    {
        $genres = Genre::all();
        $countries = Country::all();
        return view('admin.movies.edit', compact('movie', 'genres', 'countries'));
    }

    public function update(Request $request, Movie $movie) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required|image',
            'genre_id' => 'required',
            'synopsys' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            Storage::disk('public')->delete('admin/assets/img/' . $movie->poster);
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('admin/assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }

        $movie->update($validatedData);
        return redirect('/admin/movies')->with('success', 'Movie updated successfully!');
    }

    public function destroy(Movie $movie) 
    {
        Storage::disk('public')->delete('assets/img/' . $movie->poster);

        $movie->delete();
        return redirect('/admin/movies')->with('success', 'Movie delete successfully!');
    }
}
