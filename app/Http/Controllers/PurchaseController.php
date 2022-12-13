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
        $this->middleware(['auth']);
        $this->middleware(['customer']);
    }

    public function index()
    {   
        $purchases = Purchase::latest()->where('user_id', auth()->user()->id)->get();
        
        foreach ($purchases as $purchase) {
            $totalPrice[$purchase->id] = 0;
            foreach ($purchase->products as $product) {
                $totalPrice[$purchase->id] += $product->price * $product->pivot->quantity;
            }   
        }
        
        return view('purchases.index', [
            'purchases' => $purchases,
            'totalPrice' => $totalPrice,
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
        if ($request->product_id) {
            $purchase = Purchase::create([
                'user_id' => auth()->user()->id
            ]);

            PurchaseDetail::create([
                'purchase_id' => $purchase->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        } else {
            DB::transaction(function () {
                // INSERT INTO PURCHASES TABLE
                $purchase = Purchase::create([
                    'user_id' => auth()->user()->id
                ]);

                // INSERT INTO PURCHASE DETAILS TABLE
                $carts = Cart::where('user_id', auth()->user()->id)->get();

                foreach ($carts as $cart) {
                    PurchaseDetail::create([
                        'purchase_id' => $purchase->id,
                        'product_id' => $cart->product_id,
                        'quantity' => $cart->quantity,
                    ]);

                    $cart->delete();
                }
            });
        }
    
        return redirect()->back();
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
