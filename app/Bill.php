<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    protected $guarded = [];

    public function tenant(){

    	return $this->belongsTo('App\Tenant');
    }

    public function property(){

    	return $this->belongsTo('App\Property');
    }
}
