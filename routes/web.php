<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//sementara 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('job');
Route::get('/post', function () {
    return view('post');
})->name('post');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
