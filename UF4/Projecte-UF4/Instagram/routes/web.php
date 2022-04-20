<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/userIndex', [App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('auth');;
Route::post('/userUpdate', [App\Http\Controllers\UserController::class, 'update'])->name('user.update')->middleware('auth');;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
