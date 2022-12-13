<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {   
        return view('profile', [
            'cartCount' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            'categories' => Category::orderBy('name')->get()
        ]);
    }
}
