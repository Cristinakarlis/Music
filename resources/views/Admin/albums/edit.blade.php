@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Album</h1>
                <form action="/admin/albums/edit" method="POST">
                @csrf
                <input type="hidden" name="albumid" id="albumid" value="{{ $album->_id}}">
                    <div class="form-group">
                        <label for="album_name">Album Name</label>
                        <input class="form-control" type="text" name="album_name" id="album_name" value="{{ $album->album_name }}" >
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <select name="artist" id="artist" class="form-control">
                            <option value="0">Select an Artist... </option>
                            @foreach($artist as $artist)
                            <option value="{{ $artist->_id }}" {{ $artist->_id == $album->id_artist ? 'selected' : '' }}>{{ $artist->artist_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-control">
                            <option value="0">Select a Genre... </option>
                            @foreach($genre as $genre)
                            <option value="{{ $genre->_id }}" {{ $genre->_id == $album->id_genre ? 'selected' : '' }}>{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numbersongs">Number of songs</label>
                        <input class="form-control" type="text" name="numbersongs" id="numbersongs" value="{{ $album->numbersongs }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $album->year }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection