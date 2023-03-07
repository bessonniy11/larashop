<?php

namespace App\Http\Controllers;

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
        return view('products');
    }

    public function category() {
        return view('category');
    }

    public function product($category = null, $product = null) {
        return view('product', ['product' => $product]);
    }
}
