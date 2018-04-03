<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use DB;
use Schema;
use Carbon\Carbon;
use Hash;
use App\User;

class AdminController extends Controller
{

    public function index() {

    	$tables = $this->getTables();

    	$featured = array_filter($tables, function($value) {

    		if(strpos($value, '_') == false) {
    			return $value;
    		}

    	});

    	rsort($featured);

    	return view('admin.pages.dashboard')
    		->withTables($tables)
    		->withFeatured($featured);

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

    public function addToTable(Request $request) {

    	$tables = $this->getTables();

    	$selectedTable = $request->slug;
    	$tbl = lcfirst($request->slug);

    	$tableName = array_diff(Schema::getColumnListing($tbl), ['last_login', 'permissions', 'created_at', 'updated_at']);
    	

    	if($request->pid == null) {

    		$tableData = DB::table(''.$tbl.'')->get();

			return view('admin.pages.addToTable')
				->withTables($tables)
				->withSelectedTable($selectedTable)
				->withTableData($tableData)
				->withTableName($tableName);
				
    	} else {

    		$tableData = DB::table(''.$tbl.'')->where('id', $request->pid)->first();

    		return view('admin.pages.editTable')
	    		->withTables($tables)
				->withSelectedTable($selectedTable)
				->withTableData($tableData)
				->withTableName($tableName);
    	}	

    }

    public function store(Request $request) {

    	$values = array_slice($request->all(), 2);

    	unset($values['tableid']);
    	unset($values['id']);

    	if($request->image != null) {

			unset($values['image']);
			unset($values['destination']);

			$file = $request->image;

			if($request->destination != null) {

				$destination = public_path().'/'.$request->destination.'';

			} else {

				$destination = public_path().'/images';
			}
			
			$fileName = $file->getClientOriginalName();
			$file->move($destination, $fileName);

			$values['image'] = $fileName;
			
    	} else {

    		unset($values['image']);
    		unset($values['destination']);

    	}

    	if($request->password != null) {
    		unset($values['password']);

    		$values['password'] = Hash::make($request->password);
    	}
    	
    	$values['created_at'] = Carbon::now();
		$values['updated_at'] = Carbon::now();

		if($request->tableid == null) {

			$table =  DB::table(''.$request->tableName.'')->insert($values);

		} else {

			$table =  DB::table(''.$request->tableName.'')->where('id', $request->tableid)->update($values);

		}

    	
    	return back()->with('success', 'Saving successful!');

    }

    public function delete(Request $request, $id) {

    	DB::table(''.$request->tableName.'')->where('id', $id)->delete();

    	return back()->with('success', 'Deleting successful!');

    }

    private function getTables($exclude = null) {

    	$tables = DB::select('SHOW TABLES');
    	$tables = array_map('current', $tables);

    	$tables = array_diff($tables, ['migrations', 'persistences', 'throttle', 'activations', 'reminders', $exclude]);

    	return $tables;
    }
}
