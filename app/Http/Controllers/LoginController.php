<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $validate = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $remember_token = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            //if successfull then redirect to the intended view
            Session::put('email', $request->input('email'));
            $user = User::where('email', $email)->first();
            $id = $user->id;
            return redirect()->route('admin')->with('id', $id);
        } else {
            return redirect()->back();
        }
    }



    public function logout(Request $request)
    {

        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
