<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, "index"]);
Route::get("/about/{movie}", [PagesController::class, "about"]);
Route::get("/movies", [PagesController::class, "movies"]);
Route::get("/login", [PagesController::class, "login"]);
Route::group(["middleware" => "auth"], function() {
    Route::resource('/admin/movies', MovieController::class);
    Route::resource('/admin/genres', GenreController::class);
    Route::resource('/admin/reviews', ReviewController::class);
    Route::resource('/admin/countries', CountryController::class);
});

Route::get("/login", [AuthController::class, "showLoginForm"])->name("login");
Route::post("/login", [AuthController::class, "login"]);

Route::get("/register", [AuthController::class, "showRegistrationForm"]);
Route::post("/register", [AuthController::class, "register"]);