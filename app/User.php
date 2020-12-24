<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'isVerified','email_verified_at',
        'role_id','is_active','photo','last'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){

        return $this->belongsTo('App\Role');
    }

     public function tenant(){

        return $this->belongsTo('App\Tenant');
    }



    public function documents(){

        return $this->hasMany('App\Document');
    }

    
    public function isAdmin(){

      if($this->role->name === 'admin'){

        return true;
      }
      else{

        return false;
      }

    }

    public function isLandlord(){

      if($this->role->name === 'landlord'){

        return true;
      }  
      else{

        return false;
      }

    }

    public function isTenant(){

      if($this->role->name === 'tenant'){

        return true;
      }  
      else{

        return false;
      }

    }

}
