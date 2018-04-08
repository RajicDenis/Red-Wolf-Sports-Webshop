<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug) {

        $product = Product::with('gallery')->where('slug', $slug)->first();

        return view('pages.product')->with('product', $product);

    }

    public function showJerseys() {

        $product = Product::where('type', 'jersey')->get();
        $type = 'Jerseys';

        return view('pages.brandPage')
            ->with('type', $type)
            ->with('product', $product);

    }

    public function showShoes() {

        $product = Product::where('type', 'shoe')->get();
        $type = 'Shoes';

        return view('pages.brandPage')
            ->with('type', $type)
            ->with('product', $product);

    }

}
