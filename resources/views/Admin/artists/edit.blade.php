@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Artist</h1>
                <form action="/admin/artists/edit" method="POST">
                @csrf
                <input type="hidden" name="artistid" id="artistid" value="{{ $artist->_id}}">
                    <div class="form-group">
                        <label for="artist_name">Artist Name</label>
                        <input class="form-control" type="text" name="artist_name" id="artist_name" value="{{ $artist->artist_name}}">
                    </div>
                    <div class="form-group">
                        <label for="nacionality">Nacionality</label>
                        <input class="form-control" type="text" name="nacionality" id="nacionality" value="{{ $artist->nacionality}}">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age" value="{{ $artist->age}}">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input class="form-control" type="text" name="awards" id="awards" value="{{ $artist->awards}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $artist->description}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection