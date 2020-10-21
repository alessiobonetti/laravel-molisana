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
    return view('home');
});

Route::get('/prodotti', function () {
    
    $data = config("pasta");

    $pasta = [];

  foreach ($data as $key => $pastaType) {
    $pastaType ["id"] = $key;
    $pasta[$pastaType["tipo"]][] = $pastaType;
    }


    return view('prodotti', ["type" => $pasta]);
});

Route::get('/prodotti/show/0', function () {
    $prodotto = config("pasta.0");
    return view('singolo-prodotto');
});

Route::get('/news', function () {
    return view('news');
});