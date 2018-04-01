<?php

namespace App\Http;

use DB;

class Helpers 
{

	public static function getFieldType($table, $field) {

		$type = DB::getDoctrineColumn($table, $field)->getType()->getName();

		return $type;

	}

	public static function numericTypes() {

		$types = ['integer', 'tinyint', 'smallint', 'mediumint', 'int', 'bigint', 'decimal', 'float', 'double'];

		return $types;

	}

}