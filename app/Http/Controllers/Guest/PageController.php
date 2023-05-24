<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movie()
    {

        $movies = Movie::all();
        // dd($movies);
        return view('movies', compact('movies'));
    }
}
