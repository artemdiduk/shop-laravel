<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {

        return view('page/index');
    }

    public function category($code, Product $product) {
        $category = Category::where('code', $code)->first();
        $products =  $category->products()->get();
        return view('page/category', compact('category', 'products'));
    }

    public function categories(Category $categories) {
        $categories = $categories->all();
        return view('page/categories', compact('categories'));
    }

    public function basket () {
        return view('page/basket');
    }
    public function product(Category $category, Product $product) {
            dd(
                $product
            );
    }
}
