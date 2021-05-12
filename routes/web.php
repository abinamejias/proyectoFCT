<?php

use App\Models\Album;
use App\Models\Playlist;
use App\Models\Favtrack;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\HomeController;
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

Route::resource('/home-controller', HomeController::class)->names('home.all');

Route::get('/playlist/{id}', [HomeController::class, 'show'])->name('playlist.show');