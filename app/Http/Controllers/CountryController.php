<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller {
    public function index() 
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function create() 
    {
        return view('admin.countries.create');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate(['name' => 'required']);

        Country::create($validatedData);
        return redirect('/admin/countries')->with('success', 'Country added successfully!');
    }

    public function edit(Country $country) 
    {
        return view('admin.countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country) 
    {
        $validatedData = $request->validate(['name' => 'required']);

        $country->update($validatedData);
        return redirect('/admin/countries')->with('success', 'Country updated successfully!');
    }

    public function destroy(Country $country) 
    {
        $country->delete();
        return redirect('/admin/countries')->with('success', 'Country delete successfully!');
    }
}