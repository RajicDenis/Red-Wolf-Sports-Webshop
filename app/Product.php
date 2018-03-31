<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function gallery() {

    	return $this->hasMany('App\Gallery');

    }

    public function orders() {

    	return $this->belongsToMany('App\Order')->withPivot('quantity')->withTimestamps();

    }
}
