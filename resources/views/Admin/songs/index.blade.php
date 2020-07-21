@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Songs</h1>
                <a class="text right" href="/admin/songs/create">Create New Song</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Song Name</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Album</th>
                        <th scope="col">Year</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($song as $song)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $song->title_song}}</td>
                        <td>{{ $song->id_artist }}</td>
                        <td>{{ $song->duration}} minutes</td>
                        <td>{{ $song->id_genre }}</td>
                        <td>{{ $song->id_album }}</td>
                        <td>{{ $song->year }}</td>
                        <td>
                            <a href="/admin/songs/{{ $song->_id }}">Details</a> |
                            <a href="/admin/songs/edit/{{ $song->_id }}">Edit</a> |
                            <a href="/admin/songs/delete/{{ $song->_id }}">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection