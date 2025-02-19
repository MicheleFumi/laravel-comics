<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::GET('/about', function () {
    return view('about');
})->name("about");
