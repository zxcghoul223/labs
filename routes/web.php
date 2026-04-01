<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/post', [PostController::class, 'show']);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');