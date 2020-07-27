@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Artist</h1>
                <form action="/admin/artists/delete" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="artistid" id="artistid" value="{{ $artist->_id}}">
                    <div class="form-group">
                        <label for="artist_name">Artist Name</label>
                        <input class="form-control" type="text" name="artist_name" id="artist_name" value="{{ $artist->artist_name}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nacionality">Nacionality</label>
                        <input class="form-control" type="text" name="nacionality" id="nacionality" value="{{ $artist->nacionality}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age" value="{{ $artist->age}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input class="form-control" type="text" name="awards" id="awards" value="{{ $artist->awards}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $artist->description}}" disabled>
                    </div>
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection