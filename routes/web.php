<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
=======
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Ruta para la página principal
Route::get('/', function () {
    return view('home');
>>>>>>> de8c1a2338576b7967043c8763e7c7eacc3f9a12
});
