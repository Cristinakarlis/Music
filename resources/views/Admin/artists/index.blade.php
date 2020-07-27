@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Artists</h1>
                <a class="text right" href="/admin/artists/create">Create New Artist</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nacionality</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artist as $artist)
                        <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $artist->artist_name }}</td>
                        <td>{{ $artist->nacionality }}</td>
                        <td>{{ $artist->description }}</td>
                        <td>
                            <a href="/admin/artists/{{ $artist->_id }}">Details</a> |
                            <a href="/admin/artists/edit/{{ $artist->_id }}">Edit</a> |
                            <a href="/admin/artists/delete/{{ $artist->_id }}">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection