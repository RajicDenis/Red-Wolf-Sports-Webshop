<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use DB;
use Schema;
use App\User;

class AdminController extends Controller
{

    public function index() {

    	$tables = $this->getTables();

    	return view('admin.pages.dashboard')->withTables($tables);

    }

    public function showTable(Request $request) {

    	$tables = $this->getTables();

    	$selectedTable = $request->slug;
    	$tbl = lcfirst($request->slug);

    	$tableName = array_diff(Schema::getColumnListing($tbl), ['password', 'permissions', 'created_at', 'updated_at']);
    	$tableData = DB::table(''.$tbl.'')->get();
  
    	return view('admin.pages.showTable')
    		->withTables($tables)
    		->withSelectedTable($selectedTable)
    		->withTableData($tableData)
    		->withTableName($tableName);

    }

    private function getTables() {

    	$tables = DB::select('SHOW TABLES');
    	$tables = array_map('current', $tables);

    	return $tables;
    }
}
