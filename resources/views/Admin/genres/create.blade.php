@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Create New Genre</h1>
                <form action="/admin/genres/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="genre">Genre Name</label>
                        <input class="form-control" type="text" name="genre" id="genre">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection