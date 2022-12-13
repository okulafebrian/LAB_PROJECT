<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(['customer']);
    }

    public function index()
    {   
        $carts = Cart::latest()->where('user_id', auth()->user()->id)->get();
        $totalPrice = 0;
        
        foreach ($carts as $cart) {
            $totalPrice += $cart->product->price * $cart->quantity;
        }

        return view('carts.index', [
            'carts' => $carts,
            'cartCount' => $carts->sum('quantity'),
            'totalPrice' => $totalPrice,
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $cart = Cart::where([['user_id', auth()->user()->id], ['product_id', $request->product_id]])->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + $request->quantity
            ]);
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        
        return redirect()->back();
    }

    public function show(Cart $cart)
    {
        //
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect()->back();
    }
}
