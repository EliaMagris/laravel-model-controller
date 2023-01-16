<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $all_movies = Movie::all();
        
        return view('welcome', compact('all_movies'));
    }
}