<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {   
        Session::put('dashboard_url', request()->fullUrl());
        
        return view('dashboard', [
            'products' => Product::latest()->paginate(10),
            'categories' => Category::orderBy('name')->get()
        ]);
    }
}
