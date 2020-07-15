<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class ArtistsController extends Controller {

    public function Index (){
        $collections= (new MongoDB\Client)->Music->Artists;
        $artist = $collections->find();
        return view('Artists.index', ['artist' => $artist]);

    }
}