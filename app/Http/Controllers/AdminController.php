<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function showProfile($id)
    {
        $users = Users::findorFail($id);
        return view('admin.profile')->with('users',$users);
    }

    

}
