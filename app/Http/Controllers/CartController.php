<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.cart');
    }

    public function store(Request $request)
    {
        Cart::add($request->pid, $request->name, $request->quantity, $request->price, ['size' => $request->size])
            ->associate('App\Product');

        return redirect()->route('cart')->with('success', 'Item was added to your cart!');
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success', 'Item was removed from your cart!');
        
    }
}
