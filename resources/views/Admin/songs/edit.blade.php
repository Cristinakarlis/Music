@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Song</h1>
                <form action="/admin/songs/edit" method="POST">
                @csrf
                <input type="hidden" name="songid" id="songid" value="{{ $song->_id}}">
                    <div class="form-group">
                        <label for="title_song">Song Name</label>
                        <input class="form-control" type="text" name="title_song" id="title_song" value="{{ $song->title_song }}">
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <select name="artist" id="artist" class="form-control">
                            <option value="0">Select an Artist... </option>
                            @foreach($artist as $artist)
                            <option value="{{ $artist->_id }}" {{ $artist->_id == $song->id_artist ? 'selected' : '' }}>{{ $artist->artist_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input class="form-control" type="text" name="duration" id="duration" value="{{ $song->duration }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-control">
                            <option value="0">Select a Genre... </option>
                            @foreach($genre as $genre)
                            <option value="{{ $genre->_id }}" {{ $genre->_id == $song->id_genre ? 'selected' : '' }}>{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="album">Album</label>
                        <select name="album" id="album" class="form-control">
                            <option value="0">Select an Album... </option>
                            @foreach($album as $album)
                            <option value="{{ $album->_id }}" {{ $album->_id == $song->id_album ? 'selected' : '' }}>{{ $album->album_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="text" name="year" id="year" value="{{ $song->year }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
