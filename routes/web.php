<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsLegalesController;
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
