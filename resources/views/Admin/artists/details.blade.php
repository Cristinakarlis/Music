@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Details</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $artist->artist_name}}</h5>
                    </div>
                    <ul class="list-group list-group-flash">
                        <li class= "list-group-item"><b>Nacionality:</b> {{ $artist->nacionality}}</li> 
                        <li class= "list-group-item"><b>Age:</b> {{ $artist->age}}</li>
                        <li class= "list-group-item"><b>Awards:</b> {{ $artist->awards}}</li>  
                        <li class= "list-group-item"><b>Description:</b> {{ $artist->description}}</li> 
                    </ul>
                        <div class="card-body">
                        <a href="/admin/artists/edit/{{ $artist->_id }}" class="card-link">Edit</a>
                        <a href="/admin/artists/delete/{{ $artist->_id }}" class="card-link">Delete</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection