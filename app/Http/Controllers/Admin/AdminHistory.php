<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class AdminHistory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historyss = Cart::latest()->paginate(5);
        return view('shopping.AdminHistory', compact('historyss'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        $validated = $request->validate([
            'status' => 'required|in:added,placed,shipped,canceled,delivered',
        ]);

        $orderItems = $cart->ref
            ? Cart::where('ref', $cart->ref)
            : Cart::whereKey($cart->id);

        $orderItems->update(['status' => $validated['status']]);

        return back()->with('success', 'Order status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
