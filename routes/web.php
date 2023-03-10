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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/contact', [\App\Http\Controllers\MainController::class, 'contact'])->name('contact');

Route::get('/products', [\App\Http\Controllers\MainController::class, 'products'])->name('products');

Route::get('/products/{category}', [\App\Http\Controllers\MainController::class, 'categories'])->name('categories');

Route::get('/products/{category?}/{product?}', [\App\Http\Controllers\MainController::class, 'product'])->name('product');

Route::get('/basket', [\App\Http\Controllers\MainController::class, 'basket'])->name('basket');

Route::get('/basket/place', [\App\Http\Controllers\MainController::class, 'basketPlace'])->name('basket-place');