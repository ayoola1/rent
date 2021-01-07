<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

use App\Reply;

use App\User;

use App\Tenant;

use App\Landlord;

use App\Property;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;


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


     public function accountActivation($id){
          
          // $user = User::findOrFail($id);
          // return view('kyc.account',compact('user'));

        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('kyc.account',compact('property','user'));
     }

      public function accountPaymentOption($id){
          
          // $user = User::findOrFail($id);
          // return view('kyc.account',compact('user'));

        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('kyc.payment_option',compact('property','user'));
     }

      public function financialActivation($id){
          
          // $user = User::findOrFail($id);
          // return view('kyc.account',compact('user'));

        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('kyc.financial_details',compact('property','user'));
     }

      public function rentDetailsActivation($id){
          
          // $user = User::findOrFail($id);
          // return view('kyc.account',compact('user'));

        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('kyc.rent_details',compact('property','user'));
     }


      public function breakdown($id){
          
          // $user = User::findOrFail($id);
          // return view('kyc.account',compact('user'));

        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('kyc.payment_breakdown',compact('property','user'));
     }


       public function calbreakdown(Request $request, $id){
          
        $user = User::findOrFail($id);

        $input = $request->all();

        $user->update($input);
        
        $amount_of_rent = $user->rent_amount; //A
        $rate = 6.5;//r
        $str = $user->payment_plan;
        $arr = explode(' ',$str);
        $time = $arr[0];//t

        // converting months to year

        $yr = $time/12; 

        // $formular = ('A/(1+rt');

        $below1 = $rate*$yr; 

        $below2 = 1 + $below1; 

        $formular =  $amount_of_rent/$below2;

        $the_round = round( $formular);

        // $input['monthly_plan'] = $request->the_round;

      
        // $input = $request->all();

        $user->update([ 'monthly_plan' => $the_round]);

        
       // return $the_round;

        return redirect()->back();

     }


     public function accountupdate(Request $request, $id)
    {
       

        $user = User::findOrFail($id);

        if($user->role_id === 2){
          
          Landlord::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]);
        }
        elseif($user->role_id === 3){

             Tenant::create(['user_id'=> $user->id,'role_id'=> $user->role_id,'address'=>$user->address,'gender'=>$user->gender]); 
        }

        
        $input = $request->all();

        $user->update($input);


        Session::flash('the_succ','Your data has been saved!');

        
        return redirect()->back();



    }



    public function paymentupdate(Request $request, $id)
    {
       

        $user = User::findOrFail($id);

        $input = $request->all();


        $user->update($input);


        Session::flash('the_succ','Your data has been saved!');

        return redirect()->back();
        // $property = Property::findOrFail($id);
        // $user = Auth::user();
        // return view ('kyc.payment_breakdown',compact('property','user'));
         // return redirect()->route('breakdown',$property->id);

    }


     public function financialupdate(Request $request, $id)
    {
       
        $this->validate($request,[
          
           'bvn'=>'required|min:11',
           'bank_statement'=>'required'

        ]);

        $user = User::findOrFail($id);

        $input = $request->all();


       if($file = $request->file('bank_statement')){

       
          $name = time() . $file->getClientOriginalName();

          $file->move('bank_statement',$name);


          $input['bank_statement'] = $name;
    }
   



        $user->update($input);


        Session::flash('the_succ','Your data has been saved!');

        return redirect()->back();
        

    }



    
}
