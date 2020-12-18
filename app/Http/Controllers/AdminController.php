<?php

namespace App\Http\Controllers;
use App\User;
use App\Tenant;
use App\Landlord;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $tenants = Tenant::all();
        $landlords = Landlord::all();
        return view('admin.index')->with('users',$users)
                                ->with('tenants',$tenants)
                                ->with('landlords',$landlords);
    }

    public function showProfile($id)
    {
        $users = User::Find($id);
        return view('admin.profile.index')->with('users',$users);
    }



}
