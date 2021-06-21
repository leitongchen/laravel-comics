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

    $comicsData = config('comics');

    $comicsList = [
        'comicsList' => $comicsData
    ];

    return view('home-gallery', $comicsList);
})->name('Home Gallery');



Route::get("/comicbook/{index}", function ($index) {
    $comicsData = config('comics');

    if (!is_numeric($index) || $index < 0 || $index > count($comicsData) -1) {
        abort(404, "Non trovato!");
    }

    $selectedComic = $comicsData[intval($index)];

    return view('comicbook', [
        "comic" => $selectedComic,
    ]);

})->name("comicbook");