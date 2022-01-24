<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        // $students = Student::all();

        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
