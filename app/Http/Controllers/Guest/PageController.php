<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $film = Movie::all();
        $dati = [
            "dati" => config("data"),
            "film" => $film
        ];
        return view("home", $dati);
    }
    public function movies(){
        $film = Movie::all();
        $dati = [
            "film" => $film
        ];
        return view("movies", $dati);
    }
}
