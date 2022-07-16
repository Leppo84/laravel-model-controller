<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{   

    public function index() {
        
        $movies = \App\Movie::all();
        // dd($movies);

        $data = [
        'pageName'  => 'Movie - Home',
        'pageTitle' => 'Qui film. :)'
        ];
        return view('home', $data, compact('movies'));
    }
    
    // public function list() {

    // }
}
