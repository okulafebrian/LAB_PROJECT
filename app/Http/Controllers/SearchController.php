<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function user()
    {
        return view('search', [
            'products' => Product::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            'cartCount' => auth()->check() ? Cart::where('user_id', auth()->user()->id)->sum('quantity') : 0,
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function admin()
    {   
        return view('dashboard', [
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString(),
            'categories' => Category::orderBy('name')->get()
        ]);
    }
}
