<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contactus');
});

Route::get('photo', function () {
    return view('pages.photo');
});
