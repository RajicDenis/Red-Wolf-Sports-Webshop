<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {

    	$tables = DB::select('SHOW TABLES');
    	$tables = array_map('current', $tables);

    	return view('admin.pages.dashboard')->withTables($tables);

    }
}
