@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $song->title_song}}</h5>
                        <p class="card-text"><b>Artist: </b> {{ $song->id_artist}}</p>
                    </div>
                    <ul class="list-group list-group-flash">
                     <li class= "list-group-item"><b>Duration:</b> {{ $song->duration}}</li> 
                     <li class= "list-group-item"><b>Genre:</b>  {{ $song->id_genre}}</li> 
                     <li class= "list-group-item"><b>Album:</b>  {{ $song->id_album}}</li> 
                     <li class= "list-group-item"><b>Year:</b>  {{ $song->year}}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/songs/edit/{{ $song->_id }}" class="card-link">Edit</a>
                        <a href="/admin/songs/delete/{{ $song->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
