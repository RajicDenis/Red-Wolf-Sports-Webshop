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

    public function login(Request $request) {

    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password
    	];

    	$user = Sentinel::authenticate($credentials, $request->rememberMe);

    	Sentinel::login($user);

    	return redirect()->route('home');

    }

    public function logout() {

    	Sentinel::logout();

    	return redirect()->route('home');

    }
}
