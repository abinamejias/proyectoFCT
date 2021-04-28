<?php

use App\Http\Controllers\MusicController;
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

Route::get('/Inicio', function () {
    return view('Inicio');
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

//Playlist oficiales
Route::get('/NewPop', function () {
    return view('NewPop');
});

Route::get('/R&B', function () {
    return view('R&B');
});

Route::get('/Indie', function () {
    return view('Indie');
});

Route::get('/HipHop', function () {
    return view('HipHop');
});

Route::get('/Biblioteca', function () {
    return view('pagina');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [MusicController::class, 'index'])->name('music.index');