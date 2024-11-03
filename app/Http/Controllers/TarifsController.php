<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifsController extends Controller
{
    function index() {
        // Affiche la vue tarifs.blade.php
        return view('main/tarifs');
    }
}
