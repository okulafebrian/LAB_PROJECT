<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'customer']);
    }

    public function index()
    {   
        $purchases = Purchase::where('user_id', auth()->user()->id)->latest()->get();
        
        return view('purchases.index', [
            'purchases' => $purchases,
            'cartCount' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   
        if ($request->product_id) {     // SINGLE ITEM PUCHASING
            $purchase = Purchase::create([
                'user_id' => auth()->user()->id,
                'total_price' => $request->quantity * $request->price
            ]);

            PurchaseDetail::create([
                'purchase_id' => $purchase->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        } else {       // MULTIPLE ITEMS PURCHASING (CART)
            $purchase = Purchase::create([
                'user_id' => auth()->user()->id,
                'total_price' => $request->total_price
            ]);

            foreach (auth()->user()->carts as $cart) {
                PurchaseDetail::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                ]);

                $cart->delete();
            }
        }
    
        return redirect()->back()->with('success', 'Thank you for your purchase!');
    }

    public function show(Purchase $purchase)
    {
        //
    }

    public function edit(Purchase $purchase)
    {
        //
    }

    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    public function destroy(Purchase $purchase)
    {
        //
    }
}
