<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('auth');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Auth::routes();
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/home', function () {
        return redirect()->route('home');
    });
    Route::prefix('report')->group(function () {
        Route::get('/', [App\Http\Controllers\Resport::class, 'index'])->name('report');
        Route::post('/save', [App\Http\Controllers\Resport::class, 'store'])->name('report.save');
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
});
