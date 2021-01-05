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

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function type(){

    	return $this->belongsTo('App\Type');
    }

    // public function setUtilitiesAttribute($value){

    //     $this->attributes['utilities'] = json_encode($value);
    // }

    // public function getUtilitiesAttribute($value){

    //     return $this->attributes['utilities'] = json_decode($value,true);
    // }
}
