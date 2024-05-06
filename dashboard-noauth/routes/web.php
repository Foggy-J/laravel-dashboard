<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'page' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'page' => 'About',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'page' => 'Profile',
    ]);
});
