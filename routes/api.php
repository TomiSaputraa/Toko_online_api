<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsApiController;

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

Route::get('/products',[ProductsApiController::class,'index']);
Route::post('/products',[ProductsApiController::class,'store']);
Route::get('/products/{id}',[ProductsApiController::class,'show']);
Route::put('/products/{id}',[ProductsApiController::class,'update']);
Route::delete('/products/{id}', [ProductsApiController::class, 'destroy']);
