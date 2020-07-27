<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Songs
Route::get('/songs', 'SongsController@Index')->name('Songs information');
//Artists
Route::get('/artists', 'ArtistsController@Index')->name('Artists information');
//Albums
Route::get('/albums', 'AlbumsController@Index')->name('Albums information');
//genres
Route::get('/genres', 'GenresController@Index')->name(' Music Genres information');

//ADMIN RUTES
//Songs
Route::get('/admin/songs', 'SongsController@IndexAdmin');
Route::get('/admin/songs/create','SongsController@Create');
Route::post('/admin/songs/create','SongsController@Song');
Route::get('/admin/songs/delete/{id}','SongsController@Delete');
Route::delete('/admin/songs/delete', 'SongsController@Remove');
Route::get('/admin/songs/edit/{id}','SongsController@Edit');
Route::post('/admin/songs/edit', 'SongsController@Update');
Route::get('/admin/songs/{id}','SongsController@Show');

//Genres
Route::get('/admin/genres', 'GenresController@IndexAdmin');
Route::get('/admin/genres/create','GenresController@Create');
Route::post('/admin/genres/create','GenresController@Genre');
Route::get('/admin/genres/delete/{id}','GenresController@Delete');
Route::delete('/admin/genres/delete', 'GenresController@Remove');
Route::get('/admin/genres/edit/{id}','GenresController@Edit');
Route::post('/admin/genres/edit', 'GenresController@Update');
Route::get('/admin/genres/{id}','GenresController@Show');

//Artists
Route::get('/admin/artists', 'ArtistsController@IndexAdmin');
Route::get('/admin/artists/create','ArtistsController@Create');
Route::post('/admin/artists/create','ArtistsController@Artist');
Route::get('/admin/artists/delete/{id}','ArtistsController@Delete');
Route::delete('/admin/artists/delete', 'ArtistsController@Remove');
Route::get('/admin/artists/edit/{id}','ArtistsController@Edit');
Route::post('/admin/artists/edit', 'ArtistsController@Update');
Route::get('/admin/artists/{id}','ArtistsController@Show');

//Albums
Route::get('/admin/albums', 'AlbumsController@IndexAdmin');
Route::get('/admin/albums/create','AlbumsController@Create');
Route::post('/admin/albums/create','AlbumsController@Album');
Route::get('/admin/albums/delete/{id}','AlbumsController@Delete');
Route::delete('/admin/albums/delete', 'AlbumsController@Remove');
Route::get('/admin/albums/edit/{id}','AlbumsController@Edit');
Route::post('/admin/albums/edit', 'AlbumsController@Update');
Route::get('/admin/albums/{id}','AlbumsController@Show');

