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

    public function IndexAdmin (){
        $collections= (new MongoDB\Client)->Music->Albums;
        $album = $collections->find();
        $collectionartist= (new MongoDB\Client)->Music->Artists;
        $artist= $collectionartist->find();
        return view('Admin.albums.index', ['album' => $album, "artist" => $artist]);

    }

    public function Show($id){

        $collection = (new MongoDB\Client)->Music->Albums;

        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.albums.details', [ "album" => $album ]);

    }

    public function Create(){

        $collectionalbum = (new MongoDB\Client)->Music->Albums;
        $album = $collectionalbum->find();
        $collectionartist = (new MongoDB\Client)->Music->Artists;
        $artist = $collectionartist->find();
        $collectiongenre = (new MongoDB\Client)->Music->Genres;
        $genre = $collectiongenre->find();
        return view('Admin.albums.create', ["album" => $album, "artist" => $artist, "genre" => $genre]);

    }
    
public function Album(){

        $album = [

            "album_name" => request("album_name"),

            "id_artist" => request("artist"),

            "id_genre" => request("genre"),

            "numbersongs" => request("numbersongs"),

            "year" => request("year")
        ];
        $collection = (new MongoDB\Client)->Music->Albums;
        $insertOneResult = $collection->insertOne($album);
        return redirect("/admin/albums");

    }

    public function Edit($id){

        $collection = (new MongoDB\Client)->Music->Albums;
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        $collectionartist = (new MongoDB\Client)->Music->Artists;
        $artist = $collectionartist->find();
        $collectiongenre = (new MongoDB\Client)->Music->Genres;
        $genre = $collectiongenre->find();
        return view('Admin.albums.edit', [ "album" => $album, "artist" => $artist, "genre" => $genre ]);

    }
    public function Update(){
        $collection = (new MongoDB\Client)->Music->Albums;

        $album = [

            "album_name" => request("album_name"),

            "id_artist" => request("artist"),

            "id_genre" => request("genre"),

            "numbersongs" => request("numbersongs"),

            "year" => request("year")
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("albumid"))
        ], [
            '$set' => $album
        ]);
        return redirect('/admin/albums/'.request("albumid"));
    }

    
    public function Delete($id){

        $collection = (new MongoDB\Client)->Music->Albums;
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        $collectionartist = (new MongoDB\Client)->Music->Artists;
        $artist = $collectionartist->find();
        $collectiongenre = (new MongoDB\Client)->Music->Genres;
        $genre = $collectiongenre->find();
        return view('Admin.albums.delete', [ "album" => $album, "artist" => $artist, "genre" => $genre ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->Music->Albums;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request('albumid'))
        ]);
        return redirect('/admin/albums');
    }

}