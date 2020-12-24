<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tenant;

use App\User;

use App\Role;

use App\Landlord;

use App\Property;

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
        return view('tenant');
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

        return view('admin.tenant.index',compact('tenant'));
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

        return view('tenant.the_tenant',compact('tenants'));
    }

      public function alltent($id){

        // $land = Auth::user();
        $tent = Tenant::findOrFail($id);
        $properties = Property::all();

        return view('tenant.show',compact('properties','tent'));
    }
}
