<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
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

Auth::routes();
Route::get('/home', function () {
    return redirect()->route('home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/job', [JobController::class, 'index'])->name('job');
Route::get('/post', function () {
    return view('post');
})->name('post');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
