<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
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

    public function filter(Request $request)
    {   
        dd($request);
        return view('home', [
            'products' => Product::latest()->filter(request(['filter']))->paginate(10)->withQueryString(),
            'categories' => Category::orderBy('name')->get()
        ]);
    }
}
