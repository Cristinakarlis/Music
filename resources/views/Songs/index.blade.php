@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Songs Information</h1>
            <div class="row">
            @foreach($songs as $songs)
                <div class="card col-md-3">
                    <div class="card-body">
                    <h5 class="card-title"><b>{{ $songs->title_song}}</b></h5>
                        <p class="card-text"><b>Artist:</b> {{ $songs->id_artist}}</p>
                        <p class="card-text"><b>Duration:</b> {{ $songs->duration}}</p>
                        <p class="card-text"><b>Genre:</b> {{ $songs->id_genre}}</p>
                        <p class="card-text"><b>Album:</b> {{ $songs->id_album}}</p>
                        <p class="card-text"><b>Year:</b> {{ $songs->year}}</p>
                    </div>
                </div>
            @endforeach 
        </div>
@endsection
