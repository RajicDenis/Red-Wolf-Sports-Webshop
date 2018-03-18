<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Cart;
use Stripe;
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

	    	//Success
	    	Cart::destroy();

	    	return redirect()->back()->with('success', 'Your order was successfully completed!');

    	} catch (CardErrorException $e) {

    		return back()->withErrors('Error! ' . $e->getMessage());

    	}

    	

    }
}
