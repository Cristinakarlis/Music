@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Artists</h1>
            <div class="row">
            @foreach($artist as $artist)
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $artist->artist_name}}</b></h5>
                        <p class="card-text"><b>Nacionality:</b> {{ $artist->nacionality}}</p>
                        <p class="card-text"><b>Age:</b> {{ $artist->age}}</p>
                        <p class="card-text"><b>Number of  awards won:</b> {{ $artist->awards}}</p>
                        <p class="card-text"><b>Description:</b> {{ $artist->description}}</p>
                    </div>
                </div>
            @endforeach 
        </div>
@endsection