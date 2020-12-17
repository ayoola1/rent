<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];


    public function tenant(){

    	return $this->belongsTo('App\Tenant');
    }

    public function landlord(){

    	return $this->belongsTo('App\Landlord');
    }

    public function type(){

    	return $this->belongsTo('App\Type');
    }
}
