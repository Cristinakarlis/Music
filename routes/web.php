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
Route::get('/admin/songs/edit/{id}','SongsController@Edit');


Route::get('/admin/songs/{id}','SongsController@Show');




