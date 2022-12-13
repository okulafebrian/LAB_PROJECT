<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('show');
        $this->middleware(['admin'])->except('show');
    }
    
    public function index()
    {
        //
    }

    public function create()
    {   
        return view('products.create', [
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        if ($request->has('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('photo')->storeAs('public/products', $proofNameToStore);
        }

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $proofNameToStore
        ]);

        return redirect()->route('home');
    }

    public function show(Product $product)
    {           
        return view('products.show', [
            'product' => $product,
            'cartCount' => auth()->check() ? Cart::where('user_id', auth()->user()->id)->sum('quantity') : 0,
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $this->validateRequest($request);

        if ($request->hasFile('photo')) {
            if ($product->photo != NULL)
                Storage::delete('public/products/' . $product->photo);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('photo')->storeAs('public/products', $proofNameToStore);
        } else {
            $proofNameToStore = $product->photo;
        }

        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $proofNameToStore
        ]);

        return redirect()->route('home');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);
    }
}

