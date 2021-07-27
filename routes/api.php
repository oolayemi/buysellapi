<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/auth', ['App\Http\Controllers\UserController', 'index']);
Route::post('/auth/createuser', ['App\Http\Controllers\UserController', 'store']);
Route::get('/auth/user/{id}', ['App\Http\Controllers\UserController', 'show']);
Route::get('/auth/signin/{email}/{password}', ['App\Http\Controllers\UserController', 'signin']);
Route::put('.auth/user/{id}', ['App\Http\Controllers\UserController', 'update']);
Route::delete('/auth/user/{id}', ['App\Http\Controllers\UserController', 'destroy']);


Route::get('/products', ['App\Http\Controllers\ProductController', 'index']);
Route::post('/product/add', ['App\Http\Controllers\ProductController', 'store']);
Route::get('/product/{id}', ['App\Http\Controllers\ProductController', 'show']);
Route::delete('/product/{id}', ['App\Http\Controllers\ProductController', 'destroy']);


Route::get('/categories', ['App\Http\Controllers\CategoryController', 'index']);
Route::post('/category/add', ['App\Http\Controllers\CategoryController', 'store']);
