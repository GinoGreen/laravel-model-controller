<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        
        $name = 'Giuseppe';
        $surname = 'Verdi';

        // return view('home', ['name' => $name, 'surname' => $surname]);
        return view('home', compact('name', 'surname'));
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }
}
