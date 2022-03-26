<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
 
  /*Tasca 2 */
 Route::get('/', function () {
    return view('home.index', []);
 })->name('home.index');
  
 Route::get('/contact', function () {
    return view('home.contact', []);
 })->name('home.contact')->middleware("auth");
  
 Route::get('/posts', function () use ($posts) {
    $request=request();
    $request->replace(['edat' => $request->get('edat', '10')]);
    dd($request->all());
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
 
/*Tasca 3*/
Route::prefix("/tasca2")->name("tasca2")->group(function() use($posts){
    Route::get('/reposta', function () use ($posts) {
        return response($posts,201)
        ->header("Content-Type", "application/json")
        ->cookie("tasca1","tasca1",120);    
    });

    Route::get('/', function () {
        return redirect("/");  
    })->name("redirect");

    Route::get('/torna', function () {
        return back();  
    })->name("back");  

    Route::get('/alaruta', function () {
        return redirect()->route("posts.list");  
    })->name("alaruta");

    Route::get('/porai', function () {
        return redirect()->away("https://www.youtube.com/");  
    })->name("porai");

    Route::get('/json', function () use ($posts) {  
        $posts_true=[];
        for ($i=1; $i < count($posts); $i++) { 
            if ($posts[$i]["interesting"]) {
                $posts_true[]=$posts[$i];
            }
        }
        return response()->json($posts_true);
    })->name("json");

    Route::get('/tasca2/download', function () {
        return response()->download(public_path("/img/radar.PNG"),"radar.PNG");  
    })->name("download");
});
