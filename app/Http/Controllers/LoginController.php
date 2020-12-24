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


    // public function login(Request $request)
    // {
    //     $validate = $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $remember_token = $request->has('remember_me') ? true : false;

    //     if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            
    //         Session::put('email', $request->input('email'));
    //         $user = User::where('email', $email)->first();
    //         $id = $user->id;
    //         return redirect()->route('dashboard')->with('id', $id);
    //     } else {
    //         return redirect()->back();
    //     }
    // }


    public function loginform(){

        return view('auth.login');
    }


    protected function login(Request $request){

      $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
  


      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch(Auth::user()->role->name){
               
               case 'admin':

                return redirect()->route('admin');

                break;

                case 'landlord':

                return redirect()->route('landlord.index');

                break;

                case 'tenant':

                return redirect()->route('tenant.index');

                break;

                default:

                return redirect()->route('login');

              
            }

           
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);


  ////////////////////Login done manually ///////////////////////////////////////      

        // $this->validate($request,[

        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);

        // $user_data = array(
         
        //   'email' => $request->get('email'),
        //   'password' => $request->get('password')

        // );

        // if(Auth::attempt($user_data)){
          
        //    return redirect('/home');
        // }
        // else{

        //     return back()->withErrors(['Error'=>'Wrong Login Details']);
        // }
    }

    ////////////////////Login done manually ///////////////////////////////////////  



    public function logout(Request $request)
    {

        // Auth::logout();
        // Session::flush();
        // return redirect('/');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
