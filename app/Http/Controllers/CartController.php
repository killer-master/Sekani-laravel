<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Eatery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shopping.cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'eatery' => "required|exists:eateries,id"
        ]);

        $eatery = Eatery::findOrFail($request->input('eatery'));

        $checkCart = Cart::where('user_id', Auth::user()->id)
            ->where('eatery_id', $request->input('eatery'))
            ->where('status', 'added');

        if ($checkCart->exists()) {
            $item = $checkCart->first();
            $qty = $item->quantity;
            $qty += 1;

            $amount = $item->eatery->price * $qty;

            $item->update([
                'quantity' => $qty,
                'amount' => $amount
            ]);
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'eatery_id' => $request->input('eatery'),
                'amount' => $eatery->price,
            ]);
        }

        Alert::success('Added to Cart');

        return back()->with('success', 'Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }


    public function checkout(Request $request)
    {
        $request->validate(['address' => 'required']);

        $cartItems = Auth::user()->cartItems;
        $ref = Str::random(16);

        foreach ($cartItems as $item) {
            $item->update([
                'ref' => $ref,
                'status' => 'placed',
                'address' => $request->input('address'),
                'order_date' => now()
            ]);
        }

        // Build WhatsApp message
        $message = "NEW ORDER\n\n";
        $message .= "Order ID: #{$ref}\n";
        $message .= "Customer: " . Auth::user()->name . "\n";
        $message .= "Email: " . Auth::user()->email . "\n";
        $message .= "Address: " . $request->address . "\n\n";

        foreach ($cartItems as $item) {
            $message .= "{$item->eatery->name} - {$item->eatery->category->name} x {$item->quantity}\n";
        }

        $message .= "\nTotal: ₦" . $cartItems->sum('amount');

        // Empty cart
        // $cartItems->each->delete();

        return redirect(
            'https://wa.me/2349065404205?text=' . urlencode($message)
        );
    
    

        // Alert::success('Added to cart');
        // return back()->with('success', 'Oder in progress');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carts = Cart::where('id', $id)->findOrFail($id);
        $carts->delete();

        Alert::success("Removed from cart successfully");
        return back()->with('success', 'Removed from cart successfully!');
    }
}
