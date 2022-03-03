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

Route::resource('songs', SongController::class)->only([
    'index', 'show', 'update', 'store', 'destroy'
]);

Route::resource('albums', AlbumController::class)->only([
    'index', 'show', 'update', 'store', 'destroy'
]);

Route::resource('artists', ArtistController::class)->only([
    'index', 'show', 'update', 'store', 'destroy'
]);