<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $products = Product::get();
        return view('products', compact('categories'), compact('products'));
    }

    public function categories($code) {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        // dd($category);
        $products = Product::where('category_id', $category->id)->get();
        return view('products', compact('categories'), compact('products'));
        // $categories = Category::where('code', $code)->first();
        // return view('products', compact('categories'));
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
