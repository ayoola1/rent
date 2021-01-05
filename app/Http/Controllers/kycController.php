<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

use App\Reply;

use App\User;

use App\Tenant;

use App\Landlord;

use Illuminate\Support\Facades\Auth;

class kycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kyc.kyc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $notes = Note::all();
        // $replies = Reply::all();

        $user = User::findOrFail($id);

        if($user->role_id === 2){
          
          Landlord::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]);
        }
        elseif($user->role_id === 3){

             Tenant::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]); 
        }

        // if($user->role_id === 3){

        //    Tenant::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]);
        // }

        
       

        // $landlord = Landlord::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]);

        $input = $request->all();

            
        $user->update($input);

        
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

           
        



        
           
           // $theinput = $request->all();
           

        


        //  if(Auth::user()->role->name == 'landlord'){
           
        //    $theinput = $request->all();
        //    $theinput['user_id'] = $user->id;
        //    $theinput['role_id'] = $user->role_id;
        //    $theinput['address'] = $user->address;
        //    $theinput['gender']  = $user->gender;

        //    Landlord::create($theinput);

        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
