<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main/accueil');
});

Route::get('/contact', function () {
    return view('main/contact');
});

Route::get('/cours', function () {
    return view('main/cours');
});

Route::get('/mentions-legales', function () {
    return view('main/mentions-legales');
});

Route::get('/tarifs', function () {
    return view('main/tarifs');
});
