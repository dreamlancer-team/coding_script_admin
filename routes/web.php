<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/post', PostController::class);
});
