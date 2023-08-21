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
        Route::get('/user', [App\Http\Controllers\Resport::class, 'user'])->name('report.user');
        Route::get('/get', [App\Http\Controllers\Resport::class, 'getData'])->name('report.get');
        Route::post('/detail', [App\Http\Controllers\Resport::class, 'detail'])->name('report.detail');
        Route::post('/edit', [App\Http\Controllers\Resport::class, 'edit'])->name('report.edit');
        Route::post('/delete', [App\Http\Controllers\Resport::class, 'delete'])->name('report.delete');
        Route::get('/export', [App\Http\Controllers\Resport::class, 'export'])->name('report.export');
    });
    Route::prefix('profile')->group(function () {
        Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
        Route::post('/save', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.save');
        Route::get('/detail/{id}', [App\Http\Controllers\ProfileController::class, 'detail'])->name('profile.detail');
        Route::get('/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    });
    Route::prefix('suggestion')->group(function () {
        Route::get('/', [App\Http\Controllers\SuggestionController::class, 'index'])->name('suggestion');
        Route::post('/save', [App\Http\Controllers\SuggestionController::class, 'store'])->name('suggestion.save');
    });
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/get', [App\Http\Controllers\UserController::class, 'getData'])->name('users.get');
    Route::get('/detail', [App\Http\Controllers\UserController::class, 'detail'])->name('users.detail');



    Route::prefix('admin')->group(function () {

        Route::prefix('resport')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('admin.report');
            Route::get('/get', [App\Http\Controllers\Admin\ReportController::class, 'getData'])->name('admin.report.get');
            Route::post('/detail', [App\Http\Controllers\Admin\ReportController::class, 'detail'])->name('admin.report.detail');
            Route::get('/delete', [App\Http\Controllers\Admin\ReportController::class, 'delete'])->name('admin.report.delete');
            Route::post('/edit', [App\Http\Controllers\Admin\ReportController::class, 'edit'])->name('admin.report.edit');
            Route::get('/export', [App\Http\Controllers\Admin\ReportController::class, 'export'])->name('admin.report.export');
        });

        Route::prefix('users')->group(function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');
            Route::get('/get', [App\Http\Controllers\UserController::class, 'getData'])->name('admin.users.get');
            Route::post('/detail', [App\Http\Controllers\UserController::class, 'detail'])->name('admin.users.detail');
            Route::get('/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('admin.users.delete');
            Route::post('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
        });
    });
});
