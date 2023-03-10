<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {
        $categories = Category::get();
        return view('products', compact('categories'));
    }

    // todo проверить, скорее всего дальше эта функция будет не нужна
    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }

    public function basket() {
        return view('basket');
    }

    public function basketPlace() {
        return view('basket-place');
    }
}
