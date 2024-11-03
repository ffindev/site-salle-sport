<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    function index() {
        // Affiche la vue cours.blade.php
        return view('main/cours');
    }
}
