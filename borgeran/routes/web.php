<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/contact', function () {
    return view('contact');
});