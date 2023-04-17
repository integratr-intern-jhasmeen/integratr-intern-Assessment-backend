<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [productsController::class, 'index']);
Route::post('/products', [productsController::class, 'store']);
Route::get('/products/{id}',[productsController::class, 'show']);
Route::put('/products/{id}',[productsController::class, 'update']);
Route::delete('/products/{id}',[productsController::class, 'destroy']);
