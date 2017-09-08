<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {

    private $customerId;
    private $customerCart;

    public function __construct() {
        
        $this->middleware('auth');
        $this->middleware(function ($request, $next){
            $this->customerId = Auth::user()->customer->id;
            $this->customerCart = Customer::find($this->customerId)->carts()->first();
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $items = $this->customerCart->items;
        $totalAmount = $this->customerCart->items->sum('pivot.amount');
        return view('cart')->with(['items' => $items, 'total_amount' => $totalAmount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request) {

        $this->customerCart->items()->syncWithoutDetaching([$request->id => ['amount' => $request->amount, 'barcode' => $request->barcode]]);
        return redirect('cart')->withSuccessMessage('Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productPriceId) {
        
        $item = $this->customerCart->items->where('pivot.product_id', '=', $request->product_price_id)->first();
        $totalPrice = $item->price * $request->quantity;

        $this->customerCart->items()->updateExistingPivot($productPriceId, ['quantity' => $request->quantity, 'amount' => $totalPrice]);

        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $this->customerCart->items()->detach($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }


    public function emptyCart() {

        $this->customerCart->items()->detach();
        return redirect('cart')->withSuccessMessage('Your cart is Empty!');
    }
}
