<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator;
use Sentinel;

class AuthenticationController extends Controller
{
    public function register(Request $request) {

    	$this->validate($request, [
    		'username' => 'required|min:4',
    		'email' => 'required|email',
    		'password' => 'required|min:6|confirmed'
    	]);

    	Sentinel::registerAndActivate($request->all());

    	return redirect()->route('home');

    }
}
