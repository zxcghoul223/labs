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

Route::get('/1', [BladeTaskController::class, 'n1']);
Route::get('/2', [BladeTaskController::class, 'n2']);
Route::get('/3', [BladeTaskController::class, 'n3']);
Route::get('/4', [BladeTaskController::class, 'n4']);
Route::get('/5', [BladeTaskController::class, 'n5']);
Route::get('/6', [BladeTaskController::class, 'n6']);
Route::get('/7', [BladeTaskController::class, 'n7']);
Route::get('/8', [BladeTaskController::class, 'n8']);
Route::get('/9', [BladeTaskController::class, 'n9']);
Route::get('/10', [BladeTaskController::class, 'n10']);
Route::get('/11', [BladeTaskController::class, 'n11']);
Route::get('/12', [BladeTaskController::class, 'n12']);
Route::get('/13', [BladeTaskController::class, 'n13']);
Route::get('/14', [BladeTaskController::class, 'n14']);
Route::get('/15', [BladeTaskController::class, 'n15']);
Route::get('/16', [BladeTaskController::class, 'n16']);
Route::get('/17', [BladeTaskController::class, 'n17']);
Route::get('/18', [BladeTaskController::class, 'n18']);
Route::get('/19', [BladeTaskController::class, 'n19']);
Route::get('/20', [BladeTaskController::class, 'n20']);
Route::get('/21', [BladeTaskController::class, 'n21']);
Route::get('/22', [BladeTaskController::class, 'n22']);
Route::get('/23', [BladeTaskController::class, 'n23']);