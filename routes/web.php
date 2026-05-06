<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QueryBuilder;

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
Route::get('/24', [UserController::class, 'n24']);
Route::get('/25', [UserController::class, 'n25']);
Route::get('/26', [UserController::class, 'n26']);
Route::get('/27', [UserController::class, 'n27']);
Route::get('/28', [UserController::class, 'n28']);
Route::get('/29', [UserController::class, 'n29']);
Route::get('/30', [UserController::class, 'n30']);
Route::get('/31', [UserController::class, 'n31']);
Route::get('/32', [UserController::class, 'n32']);
Route::get('/33', [UserController::class, 'n33']);
Route::get('/34', [UserController::class, 'n34']);
Route::get('/35', [UserController::class, 'n35']);
Route::get('/36', [UserController::class, 'n36']);
Route::get('/qb/1', [QueryBuilder::class, 'pervoe']);
Route::get('/qb/2', [QueryBuilder::class, 'vtoroe']);
Route::get('/qb/3', [QueryBuilder::class, 'trete']);
Route::get('/qb/4', [QueryBuilder::class, 'chet']);
Route::get('/qb/5', [QueryBuilder::class, 'pyt']);
Route::get('/qb/6', [QueryBuilder::class, 'shest']);
Route::get('/qb/7', [QueryBuilder::class, 'sem']);
Route::get('/qb/8', [QueryBuilder::class, 'vosem']);
Route::get('/qb/9', [QueryBuilder::class, 'devyt']);
Route::get('/qb/10', [QueryBuilder::class, 'desyt']);
Route::get('/qb/11', [QueryBuilder::class, 'odinadin']);
Route::get('/qb/12', [QueryBuilder::class, 'dvenadcat']);
Route::get('/qb/13', [QueryBuilder::class, 'trinadcat']);
Route::get('/qb/14', [QueryBuilder::class, 'chetyrnadcat']);
Route::get('/qb/15', [QueryBuilder::class, 'pyatnadcat']);
Route::get('/qb/16', [QueryBuilder::class, 'shestnadcat']);
Route::get('/qb/17', [QueryBuilder::class, 'semnadcat']);
Route::get('/qb/18', [QueryBuilder::class, 'vosemnadcat']);
Route::get('/qb/19', [QueryBuilder::class, 'devyatnadcat']);
Route::get('/qb/20', [QueryBuilder::class, 'dvadcat']);
Route::get('/qb/21', [QueryBuilder::class, 'dvadcatodin']);
Route::get('/qb/22', [QueryBuilder::class, 'dvadcatdva']);
Route::get('/qb/23', [QueryBuilder::class, 'dvadcatri']);
Route::get('/qb/24', [QueryBuilder::class, 'dvadcatchet']);
Route::get('/qb/25', [QueryBuilder::class, 'dvadcatpyat']);
Route::get('/qb/26', [QueryBuilder::class, 'dvadcatshest']);
Route::get('/qb/27', [QueryBuilder::class, 'dvadcatsem']);
Route::get('/qb/28', [QueryBuilder::class, 'dvadcatvosem']);
Route::get('/qb/29', [QueryBuilder::class, 'dvadcatdevyt']);
Route::get('/qb/30', [QueryBuilder::class, 'tridcat']);
Route::get('/qb/31', [QueryBuilder::class, 'tridcatodin']);
Route::get('/qb/32', [QueryBuilder::class, 'tridcatdva']);
Route::get('/qb/33', [QueryBuilder::class, 'tridcatri']);
Route::get('/qb/34', [QueryBuilder::class, 'tridcatchet']);
Route::get('/qb/35', [QueryBuilder::class, 'tridcatpyat']);
Route::get('/qb/36', [QueryBuilder::class, 'tridcatshest']);
Route::get('/qb/37', [QueryBuilder::class, 'tridcatsem']);
Route::get('/qb/38', [QueryBuilder::class, 'tridcatvosem']);
Route::get('/qb/39', [QueryBuilder::class, 'tridcatdevyt']);
Route::get('/qb/40', [QueryBuilder::class, 'sorok']);
Route::get('/qb/41', [QueryBuilder::class, 'sorokodin']);
Route::get('/qb/42', [QueryBuilder::class, 'sorokdva']);
Route::get('/qb/43', [QueryBuilder::class, 'soroktri']);
Route::get('/qb/44', [QueryBuilder::class, 'sorokchet']);
Route::get('/qb/45', [QueryBuilder::class, 'sorokpyat']);
Route::get('/qb/46', [QueryBuilder::class, 'sorokshest']);
Route::get('/qb/47', [QueryBuilder::class, 'soroksem']);
Route::get('/qb/48', [QueryBuilder::class, 'sorokvosem']);
Route::get('/qb/49', [QueryBuilder::class, 'sorokdevyt']);
Route::get('/qb/50', [QueryBuilder::class, 'pyatdesyat']);
Route::get('/qb/51', [QueryBuilder::class, 'pyatdesyatodin']);
Route::get('/qb/52', [QueryBuilder::class, 'pyatdesyatdva']);
Route::get('/qb/53', [QueryBuilder::class, 'pyatdesyatri']);
Route::get('/qb/54', [QueryBuilder::class, 'pyatdesyatchet']);
Route::get('/qb/55', [QueryBuilder::class, 'pyatdesyatpyat']);
Route::get('/qb/56', [QueryBuilder::class, 'pyatdesyatshest']);
Route::get('/qb/57', [QueryBuilder::class, 'pyatdesyatsem']);