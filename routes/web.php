<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('get-logout');

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\MainController::class, 'contact'])->name('contact');


Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [\App\Http\Controllers\BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/place', [\App\Http\Controllers\BasketController::class, 'basketConfirm'])->name('basket-confirm');


Route::get('/products', [\App\Http\Controllers\MainController::class, 'products'])->name('products');

Route::get('/products/{category}', [\App\Http\Controllers\MainController::class, 'categories'])->name('categories');

Route::get('/products/{category?}/{product?}', [\App\Http\Controllers\MainController::class, 'product'])->name('product');
