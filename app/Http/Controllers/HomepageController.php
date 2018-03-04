<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(3)->get();
        $sponsored = Product::inRandomOrder()->take(1)->first();

        return view('pages.homepage')
            ->with('products', $products)
            ->with('sponsored', $sponsored);
    }

}
