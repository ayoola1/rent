<?php

namespace App\Http\Controllers;
use App\User;
use App\Tenant;
use App\Landlord;
use App\Property;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // public function __construct(){

    //     $this->middleware('admin');
    // }

    public function index(){
        $users = User::all();
        $tenants = Tenant::all();
        $landlords = Landlord::all();
        $properties = Property::all();
        return view('admin')->with('users',$users)
                                ->with('tenants',$tenants)
                                ->with('landlords',$landlords)
                                ->with('properties',$properties);
    }



}
