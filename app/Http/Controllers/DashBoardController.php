<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class DashBoardController extends Controller
{

	// public function __construct(){

	//   return $this->middleware('auth');
	// }


    public function getdashboard(){
        
        $users = User::all();
    	return view('dashboard',compact('users'));
    }

 
}
