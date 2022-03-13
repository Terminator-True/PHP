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
    return view('welcome',["uf"=>"UF4: Laravel","tasca"=>"Tasca1"]);
})->name('home');
Route::get('/pelicula/{titol?}/{any?}', function ($titol="No hi ha titol",$any=2022) {
    return view('pelicula',[
        "titol"=>$titol,
        "any"=>$any
    ]);
})->where([
    "titol"=> '[A-za-z ]+',
    "any"=> '[0-9]{4}$  '
])->name('films');

