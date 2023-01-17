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
        $this->middleware(['auth', 'admin'])->except('show');
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
            'category_id' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $proofNameToStore
        ]);

        return redirect()->route('dashboard')->with('success', 'Product sucessfully added');
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
            'category_id' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $proofNameToStore
        ]);

        if (session('dashboard_url')) {
            return redirect(session('dashboard_url'));
        }

        return redirect()->route('dashboard')->with('success', 'Product sucessfully updated');
    }

    public function destroy(Product $product)
    {   
        if ($product->photo != NULL)
            Storage::delete('public/products/' . $product->photo);

        $product->delete();

        return redirect()->back()->with('success', 'Product sucessfully removed');
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required|integer',
            'photo' => 'image|mimes:jpeg,jpg,png'
        ]);
    }
}

