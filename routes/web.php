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

Route::get('/1', [UserController::class, 'n1']);
Route::get('/2', [UserController::class, 'n2']);
Route::get('/3', [UserController::class, 'n3']);
Route::get('/4', [UserController::class, 'n4']);
Route::get('/5', [UserController::class, 'n5']);
Route::get('/6', [UserController::class, 'n6']);
Route::get('/7', [UserController::class, 'n7']);
Route::get('/8', [UserController::class, 'n8']);
Route::get('/9', [UserController::class, 'n9']);
Route::get('/10', [UserController::class, 'n10']);
Route::get('/11', [UserController::class, 'n11']);
Route::get('/12', [UserController::class, 'n12']);
Route::get('/13', [UserController::class, 'n13']);
Route::get('/14', [UserController::class, 'n14']);
Route::get('/15', [UserController::class, 'n15']);
Route::get('/16', [UserController::class, 'n16']);
Route::get('/17', [UserController::class, 'n17']);
Route::get('/18', [UserController::class, 'n18']);
Route::get('/19', [UserController::class, 'n19']);
Route::get('/20', [UserController::class, 'n20']);
Route::get('/21', [UserController::class, 'n21']);
Route::get('/22', [UserController::class, 'n22']);
Route::get('/23', [UserController::class, 'n23']);