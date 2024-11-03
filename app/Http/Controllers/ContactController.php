<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        // Affiche la vue contact.blade.php
        return view('main/contact');
    }
}
