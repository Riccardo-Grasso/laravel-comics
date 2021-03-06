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

Route::get('/', 'HomeController@index')->name("home.index");

Route::get('/characters', function () {
    return view("characters.index");
})->name("characters.index");


Route::get('/comics', function () {
    $dati_comics = config("db_comics");

    return view("comics.index", [
        "lista_comics" => $dati_comics
    ]);
})->name("comics.index");


Route::get('/comics/{id?}', function ($id) {
    $data = config("db_comics");

    if (is_numeric($id) && $id >= 0 && $id < count($data)) {
        $comic = $data[$id];
        return view("comics.details", [
            "comic" => $comic
        ]);
    } else {
        abort("404");
    }
})->name("comics.details");


Route::get('/movies', function () {
    return view("movies.index");
})->name("movies.index");

Route::get('/tv', function () {
    return view("tv.index");
})->name("tv.index");

Route::get('/games', function () {
    return view("games.index");
})->name("games.index");

Route::get('/collectibles', function () {
    return view("collectibles.index");
})->name("collectibles.index");

Route::get('/videos', function () {
    return view("videos.index");
})->name("videos.index");

Route::get('/fans', function () {
    return view("fans.index");
})->name("fans.index");

Route::get('/news', function () {
    return view("news.index");
})->name("news.index");

Route::get('/shop', function () {
    return view("shop.index");
})->name("shop.index");
