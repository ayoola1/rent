<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['address','gender','role_id','user_id','landlord_id','property_id'];

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
