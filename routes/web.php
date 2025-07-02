<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rian Asri Damanik",
        "email" => "rianasridamanik0@gmail.com"
    ]);
});



Route::get('/blog', [PostController::class, 'index']); 
Route::get('posts/{slug}', [PostController::class, 'show']);