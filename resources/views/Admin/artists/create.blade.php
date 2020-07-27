@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Artist</h1>
                <form action="/admin/artists/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="artist_name">Artist Name</label>
                        <input class="form-control" type="text" name="artist_name" id="artist_name">
                    </div>
                    <div class="form-group">
                        <label for="nacionality">Nacionality</label>
                        <input class="form-control" type="text" name="nacionality" id="nacionality">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input class="form-control" type="text" name="awards" id="awards">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description">
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection