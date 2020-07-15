<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class AlbumsController extends Controller {

    public function Index (){
        $collections= (new MongoDB\Client)->Music->Albums;
        $album = $collections->find();
        return view('Albums.index', ['album' => $album]);

    }
}