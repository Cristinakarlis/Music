@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Albums</h1>
                <a class="text right" href="/admin/albums/create">Create New Album</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Artist </th>
                        <th scope="col">Songs No.</th>
                        <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($album as $album)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $album->album_name }}</td>
                        <td>{{ $album->id_artist}}</td>
                        <td>{{ $album->numbersongs }} </td>
                        <td>
                            <a href="/admin/albums/{{ $album->_id }}">Details</a> |
                            <a href="/admin/albums/edit/{{ $album->_id }}">Edit</a> |
                            <a href="/admin/albums/delete/{{ $album->_id }}">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection