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
use App\Models\Image;

Route::get('/', function () {
    $images =   Image::all();
    foreach ($images as $image) {
        echo $image->image_path. "<br>";
        echo $image->description. "<br>";
        echo $image->user->name. " " .$image->user->surname;

    }
    return view('welcome');
})->middleware('auth');#Middleware per a que si no estás loguejat t'envía cap el login

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
