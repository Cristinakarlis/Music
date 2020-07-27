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

    public function IndexAdmin (){
        $collections= (new MongoDB\Client)->Music->Artists;
        $artist = $collections->find();
        return view('Admin.artists.index', ['artist' => $artist]);

    }

    public function Show($id){

        $collection = (new MongoDB\Client)->Music->Artists;

        $artist = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.artists.details', [ "artist" => $artist ]);

    }

    public function Create(){
        $collection = (new MongoDB\Client)->Music->Artists;
        $artist = $collection->find();
        return view('Admin.artists.create', ["artist" => $artist ]);

    }

    public function Artist(){

        $artist = [

            "artist_name" => request("artist_name"),

            "nacionality" => request("nacionality"),

            "age" => request("age"),

            "awards" => request("awards"),

            "description" => request("description")
        ];
        $collection = (new MongoDB\Client)->Music->Artists;
        $insertOneResult = $collection->insertOne($artist);
        return redirect("/admin/artists");

    }

    public function Edit($id){
        $collection = (new MongoDB\Client)->Music->Artists;
        $artist = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('Admin.artists.edit',["artist" => $artist]);
    }
    
    public function Update(){
        $collection = (new MongoDB\Client)->Music->Artists;
        $artist = [

            "artist_name" => request("artist_name"),

            "nacionality" => request("nacionality"),

            "age" => request("age"),

            "awards" => request("awards"),

            "description" => request("description")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("artistid"))
        ], [
            '$set' => $artist
        ]);
        return redirect('/admin/artists/'.request("artistid")); 
    }

    public function Delete($id){
        $collection = (new MongoDB\Client)->Music->Artists;
        $artist = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view("Admin.artists.delete", [ "artist"=> $artist ]);
    }
    public function Remove(){
        $collection = (new MongoDB\Client)->Music->Artists;
        $artist = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request('artistid'))
        ]);
        return redirect('/admin/artists');
    }
}