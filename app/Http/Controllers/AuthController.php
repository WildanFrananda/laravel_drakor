<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller {
    public function showLoginForm() {
        return view('login.index');
    }

    public function login(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)) {
            $user = Auth::user();

            if($user->role == 'admin') {
                return redirect('/admin/movies')->with('success', 'Login successfully as admin');
            } else {
                return redirect('/')->with('success', 'Login Successfully as user');
            }
        }

        return back()->withErrors([
            'email' => 'Email or Password invalid'
        ]);
    }

    public function showRegistrationForm() {
        return view('register.index');
    }

    public function register(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }
}