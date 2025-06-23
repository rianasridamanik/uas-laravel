<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Rian Asri Damanik",
        "email" => "rianasridamanik0@gmail.com"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
