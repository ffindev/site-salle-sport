<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index() {
        // affiche la vue accueil.blade.php
        return view('main/accueil');
    }
}
