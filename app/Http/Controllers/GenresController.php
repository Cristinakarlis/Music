<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class GenresController extends Controller {

    public function Index (){
        $collections= (new MongoDB\Client)->Music->Genres;
        $genre = $collections->find();
        return view('Genres.index', ['genre' => $genre]);

    }
}