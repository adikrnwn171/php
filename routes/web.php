<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Adi']);
});

Route::get('/blog', function () {
    return view('blog');
});
 
Route::get('/contact', function () {
    return view('contact', ['email' => 'example@gmail.com', 'hp' => '08123456789']);
});
