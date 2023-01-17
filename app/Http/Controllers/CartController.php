<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'customer']);
    }

    public function index()
    {           
        $carts = Cart::addSelect([
            'total_price' => Product::whereColumn('id', 'carts.product_id')
                ->selectRaw('sum(quantity * price) as total_price')
        ])->get();

        return view('carts.index', [
            'carts' => $carts,
            'totalPrice' => $carts->sum('total_price'),
            'cartCount' => $carts->sum('quantity'),
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
        
        return redirect()->back()->with('success', 'Successfully added to cart!');;
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
