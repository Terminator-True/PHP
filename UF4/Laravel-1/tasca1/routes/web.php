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

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'done' => false,
        'interesting' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'done' => true,
        'interesting' => true
    ],
    3 => [
        'title' => 'Intro to CSS',
        'content' => 'This is a short intro to CSS',
        'done' => true,
        'interesting' => false
    ],
    4 => [
        'title' => 'Intro to Vue',
        'content' => 'This is a short intro to Vue',
        'done' => false,
        'interesting' => false
    ],
    5 => [
        'title' => 'Intro to Bootstrap',
        'content' => 'This is a short intro to Bootstrap',
        'done' => false,
        'interesting' => true
    ]
 ];
 
  
 Route::get('/', function () {
    return view('home.index', []);
 })->name('home.index');
  
 Route::get('/contact', function () {
    return view('home.contact', []);
 })->name('home.contact');
  
  
 Route::get('/posts', function () use ($posts) {
    return view('posts.list', ['posts' => $posts]);
 })->name('posts.list');
  
 Route::get('/posts/{id}', function ($id) use ($posts) {
    $post = $posts[$id];
    return view('posts.show', ['post' => $post]);
 })
    ->where([
        'id' => '[0-9]+'
    ])
    ->name('posts.show');
 
/*
Tasca 1
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
*/

