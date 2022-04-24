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
Auth::routes();

Route::get('/userIndex', [App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('auth');;
Route::post('/userUpdate', [App\Http\Controllers\UserController::class, 'update'])->name('user.update')->middleware('auth');;

Route::get('/paswordIndex', [App\Http\Controllers\PasswordController::class, 'indexPassword'])->name('password.index')->middleware('auth');
Route::post('/paswordUpdate', [App\Http\Controllers\PasswordController::class, 'updatePassword'])->name('password.update')->middleware('auth');

Route::get('/Image', [App\Http\Controllers\ImageController::class, 'index'])->name('image.up')->middleware('auth');;
Route::post('/ImageUpload', [App\Http\Controllers\ImageController::class, 'ImageUp'])->name('image.upload')->middleware('auth');;

Route::get('/userAvatar/{filename}', [App\Http\Controllers\UserController::class, 'getImage'])->name('user.avatar')->middleware('auth');;

Route::get('/image/{filename}', [App\Http\Controllers\ImageController::class, 'getImage'])->name('image.get')->middleware('auth');;

Route::get('/user/{userid}', [App\Http\Controllers\UserController::class, 'getUserName'])->name('user.get')->middleware('auth');;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
