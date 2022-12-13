<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category,
            'cartCount' => auth()->check() ? Cart::where('user_id', auth()->user()->id)->sum('quantity') : 0,
            'categories' => Category::orderBy('name')->get()
        ]);
    }
}
