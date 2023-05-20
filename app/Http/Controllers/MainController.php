<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {
        return view('index');
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function categories(Category $categories) {
        $categories = $categories->all();
        return view('categories', compact('categories'));
    }
}
