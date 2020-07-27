@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $album->album_name}}</h5>
                        <p class="card-text"><b>Artist: </b> {{ $album->id_artist}}</p>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item"><b>Genre:</b> {{ $album->id_genre}}</li> 
                     <li class= "list-group-item"><b>Songs Number:</b>  {{ $album->numbersongs}}</li> 
                     <li class= "list-group-item"><b>Year:</b>  {{ $album->year}}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/albums/edit/{{ $album->_id }}" class="card-link">Edit</a>
                        <a href="/admin/albums/delete/{{ $album->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
