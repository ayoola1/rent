<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Tenant;

use App\Landlord;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use App\Role;

use App\Note;

use App\Reply;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $notes = Note::all();
        $replies = Reply::all();
        return view('profile.index',compact('notes','replies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $notes = Note::all();
        $replies = Reply::all();
        $user = User::findOrFail($id);
        // $tenant = Tenant::findOrFail($id);
        $the_nant = Tenant::where('user_id','=', $user->id)->first();
        return view('profile.show',compact('user','notes','the_nant','replies'));
    }

    public function theProfile($id)
    {
        $tenant = Tenant::findOrFail($id);
        $notes = Note::all();
        $replies = Reply::all();
        return view('profile.theprofile',compact('tenant','notes','replies'));
    }

     public function theProfileland($id)
    {
        $landlordprofile = Landlord::findOrFail($id);
        $notes = Note::all();
        $replies = Reply::all();
        return view('profile.theprofileland',compact('landlordprofile','notes','replies'));
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

        $user = User::findOrFail($id);

        $input = $request->all();

        if($request->password == ''){

           $input = $request->except('password');
        }
        else{

            $input['password'] = Hash::make($request->password);
        }


       if($file = $request->file('photo')){

        // if(file_exists(public_path(). '/photos/'.$user->photo)){

        //     unlink(public_path() . '/photos/'.$user->photo);

        // }
       
          $name = time() . $file->getClientOriginalName();

          $file->move('photos',$name);


          $input['photo'] = $name;
    }

        

        $user->update($input);

        Session::flash('the_success','Profile has beeen Updated!');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
         $user = User::findOrFail($id);

         $user->delete();

         Session::flash('the_deleted', 'The user has been deleted!');

         return redirect()->route('profile.index');
    }
}
