@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Albums</h1>
            <div class="row">
            @foreach($album as $album)
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $album->album_name}}</b></h5>
                        <p class="card-text"><b>Artist:</b> {{ $album->id_artist}}</p>
                        <p class="card-text"><b>Genre:</b> {{ $album->id_genre}}</p>
                        <p class="card-text"><b>Year:</b> {{ $album->year}}</p>
                        <p class="card-text"><b>Number of songs:</b> {{ $album->numbersongs}}</p>
                        
                    </div>
                </div>
            @endforeach 
        </div>
@endsection