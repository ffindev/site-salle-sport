<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsLegalesController extends Controller
{
    function index () {
        // Affiche la vue mentions-legales.blade.php
        return view('main/mentions-legales');
    }
}
