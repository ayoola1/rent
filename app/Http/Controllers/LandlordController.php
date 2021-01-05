<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use App\Tenant;

use App\User;

use App\Role;

use App\Note;

use App\Reply;

use App\Landlord;

use App\Property;

class LandlordController extends Controller
{

    //   public function __construct(){

    //     $this->middleware('landlord');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
       $tenants = Tenant::all();
       $properties = Property::all();
       $notes = Note::all();
       $replies = Reply::all();
       return view('landlord',compact('tenants','properties','notes','replies'));
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
        // $land = Auth::user();
        // $properties = Property::all();

        // return view('landlord.show',compact('properties','land'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $landlord = Landlord::findOrFail($id);

        $input = $request->all();

        $landlord->update();

        Session::flash('the_user','Landlord has been updated!');

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $landlord = Landlord::findOrFail($id);

        $landlord->delete();

        Session::flash('the_user','Landlord has been updated!');

        return redirect()->route('');
    }

    public function allLandlord(){

        $landlords = Landlord::all();
        $notes = Note::all();
        $replies = Reply::all();
        return view('landlord.the_landlord',compact('landlords','notes','replies'));
    }

     public function allLand($id){

        // $land = Auth::user();
        $land = Landlord::findOrFail($id);
        $properties = Property::all();
        $notes = Note::all(); 
        $replies = Reply::all();
        return view('landlord.show',compact('properties','land','notes','replies'));
    }
}
