@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Edit Genre</h1>
                <form action="/admin/genres/delete" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="genreid" id="genreid" value="{{ $genre->_id}}">
                    <div class="form-group">
                        <label for="genre">Genre Name</label>
                        <input class="form-control" type="text" name="genre" id="genre" value="{{ $genre->genre}}" disabled>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
                    
