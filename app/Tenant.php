<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = [];

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function role(){

    	return $this->belongsTo('App\Role');
    }

    public function landlord(){

    	return $this->belongsTo('App\Landlord');
    }

     public function property(){

    	return $this->belongsTo('App\Property');
    }
}
