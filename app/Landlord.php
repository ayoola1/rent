<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $guarded = [];


    public function properties(){

    	return $this->hasMany('App\Property');
    }

    public function tenants(){

    	return $this->hasMany('App\Tenant');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function role(){

    	return $this->belongsTo('App\Role');
    }

    
}
