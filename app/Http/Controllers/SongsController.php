<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class SongsController extends Controller {

    public function Index (){
        $collections= (new MongoDB\Client)->Music->Songs;
        $songs = $collections->find();
        return view('Songs.index', ['songs' => $songs]);

    }
    
}