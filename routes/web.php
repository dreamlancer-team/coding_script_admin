<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\PostController as UserPostController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/post', PostController::class);
});



/// User site

Route::get('/', [BlogController::class, 'index']);
Route::get('/{post}', [UserPostController::class, 'index']);
