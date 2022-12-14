<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{

    public function index()
    {
        if (auth()->user() && auth()->user()->role == 'ADMIN') {
            return view('dashboard', [
                'products' => Product::latest()->paginate(10),
                'categories' => Category::orderBy('name')->get()
            ]);
        } else {
            return view('home', [
                'products' => Product::latest()->paginate(10),
                'cartCount' => auth()->check() ? Cart::where('user_id', auth()->user()->id)->sum('quantity') : 0,
                'categories' => Category::orderBy('name')->get()
            ]);
        }
    }
}
