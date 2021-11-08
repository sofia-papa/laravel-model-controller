<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {

        $movie = Movie::all();

        dd('$movie');

        $data = [
            'movie' => []
        ];

        return view('home', $data );
    }
}
