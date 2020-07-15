@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Genres</h1>
            <div class="row">
            @foreach($genre as $genre)
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $genre->genre}}</h5>
                        
                    </div>
                </div>
            @endforeach 
        </div>
@endsection