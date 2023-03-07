<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about']);

Route::get('/contact', [\App\Http\Controllers\MainController::class, 'contact']);

Route::get('/products', [\App\Http\Controllers\MainController::class, 'products']);

Route::get('/products/{category}', [\App\Http\Controllers\MainController::class, 'category']);

Route::get('/products/{category?}/{product?}', [\App\Http\Controllers\MainController::class, 'product']);