<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller {
    public function index() 
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }

    public function create() 
    {
        return view('admin.genres.create');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Genre::create($validatedData);
        return redirect('/admin/genres')->with('success', 'Genre added successfully!');
    }


    public function edit(Genre $genre) 
    {
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $genre->update($validatedData);
        return redirect('/admin/genres')->with('success', 'Genre updated successfully!');
    }

    public function destroy(Genre $genre) 
    {
        $genre->delete();
        return redirect('/admin/genres')->with('success', 'Genre delete successfully!');
    }
}
