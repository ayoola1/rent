<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use App\Tenant;

use App\User;

use App\Role;

use App\Landlord;

use App\Property;

use App\Note;

use App\Reply;

use App\Wallet;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //   public function __construct(){

    //     $this->middleware('tenant');
    // }


    public function index()
    {    
        $notes = Note::all();
        $replies = Reply::all();
        $wallet_user_id = Auth::user()->id;
        $ok_wallet = Wallet::where('user_id','=',$wallet_user_id)->first();
        return view('tenant',compact('notes','replies','ok_wallet','wallet_user_id'));
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
        $tenant = Tenant::find($id);
        $notes = Note::all();
        $replies = Reply::all();
        return view('admin.tenant.index',compact('tenant','notes','replies'));
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
        $tenant = Tenant::findOrFail($id);

        $input = $request->all();

        $tenant->update($input);

        Session::flash('the_user','Tenant is successfully Updated!');

        return redirect()->route('tenant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenant = Tenant::findOrFail($id);

        $tenant->delete();

        Session::flash('the_user','Tenant has been deleted');

        return redirect()->route('tenant.index');
    }

    public function allTenant(){

        $tenants = Tenant::all();
        $notes = Note::all();
        $replies = Reply::all();
        return view('tenant.the_tenant',compact('tenants','notes','replies'));
    }

      public function alltent($id){

        // $land = Auth::user();
        $tent = Tenant::findOrFail($id);
        $properties = Property::all();
        $notes = Note::all();
        $replies = Reply::all();
        return view('tenant.show',compact('properties','tent','notes','replies'));
    }
}
