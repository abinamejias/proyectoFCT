<?php

use App\Models\Album;
use App\Models\Playlist;
use App\Models\Favtrack;
use App\Models\FavtrackPlaylist;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\LastsongsController;
use App\Http\Controllers\FollowsController;

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

Route::get('/users', function () {
    return view('users');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/Registro', function () {
    return view('Registro');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/index', [MusicController::class, 'index'])->name('music.index');
Route::get('/music/{album}/{artist}', [MusicController::class, 'show'])->name('music.show');

Route::resource('/music-controller', MusicController::class)->names('music.all');

Route::resource('/playlist-controller', PlaylistController::class)->names('playlist.all');

Route::resource('/home-controller', HomeController::class)->names('home.all');

Route::get('/playlist/{id}', [HomeController::class, 'show'])->name('playlist.show');

Route::put('/logout', [HomeController::class, 'logout'])->name('home.logout');

Route::get('/apitodb', function () {
    return view('apitodb');
});
Route::get('/apitodb', [ApiController::class, 'index'])->name('apitodb.index');

Route::resource('/apicontroller-controller', ApiController::class)->names('apitodb.all');

Route::resource('/lastsongs-controller', LastsongsController::class)->names('lastsongs.all');

Route::resource('/follows-controller', FollowsController::class)->names('follows.all');

Route::get('/users', [FollowsController::class, 'index'])->name('users');