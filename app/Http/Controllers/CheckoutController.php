<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Cart;
use Stripe;
use Sentinel;
use App\Order;
use \Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function index() {

    	return view('pages.checkout');

    }

    public function store(CheckoutRequest $request) {

    	$contents = Cart::content()->map(function($item) {
    		return $item->model->slug.': '.$item->qty;
    	})->values()->toJson();

    	try {

    		$charges = Stripe::charges()->create([
	    		'amount' => Cart::total(),
	    		'currency' => 'EUR',
	    		'source' => $request->stripeToken,
	    		'description' => 'Order',
	    		'receipt_email' => $request->email,
	    		'metadata' => [
	    			'content' => $contents,
	    			'quantity' => Cart::count()
	    		],
	    	]);

            $order = new Order;

            $order->user_id = Sentinel::getUser()->id;
            $order->email = $request->email;
            $order->name = $request->name;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->phone = $request->phone;
            $order->subtotal = Cart::subtotal();
            $order->tax = Cart::tax();
            $order->total = Cart::total();
            $order->error = null;

            $order->save();

	    	//Success
	    	Cart::destroy();

	    	return redirect()->back()->with('success', 'Your order was successfully completed!');

    	} catch (CardErrorException $e) {

            Order::create([
                'error' => $e->getMessage()
            ]);

    		return back()->withErrors('Error! ' . $e->getMessage());

    	}

    	

    }
}
