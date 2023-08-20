<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('auth');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Auth::routes();
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', function () {
        return redirect()->route('home');
    });
    Route::prefix('report')->group(function () {
        Route::get('/', [App\Http\Controllers\Resport::class, 'index'])->name('report');
        Route::post('/save', [App\Http\Controllers\Resport::class, 'store'])->name('report.save');
    });
    Route::prefix('profile')->group(function () {
        Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
        Route::post('/save', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.save');
    });
    Route::prefix('suggestion')->group(function () {
        Route::get('/', [App\Http\Controllers\SuggestionController::class, 'index'])->name('suggestion');
        Route::post('/save', [App\Http\Controllers\SuggestionController::class, 'store'])->name('suggestion.save');
    });
    Route::resource('users', UserController::class);
});
