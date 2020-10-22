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

Route::get('/prodotti/show/{id}', function ($id) {
    if (config("pasta.$id")== null) {
        abort(404);
    }

    $prodotto = config("pasta.$id");
    return view('singolo-prodotto', ["data" => $prodotto, "id" => $id]);
}) ->where("id","[0-9]+")->name("dettaglio-prodotto");

Route::get('/news', function () {
    return view('news');
});