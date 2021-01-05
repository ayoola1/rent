<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\Tenant;

use App\User;

use App\Type;

use App\Landlord;

use App\Property;

use App\Note;

use App\Reply;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        $notes = Note::all();
        $replies = Reply::all();
        return view('property.index',compact('properties','notes','replies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $types = Type::pluck('name','id')->all();
        $types = Type::all();
        $user = Auth::user();
        $notes = Note::all();
        $replies = Reply::all();
        $the_id = $user->id;

        $the_pro = Property::where('user_id','=',$the_id)->get();
        
        return view('property.create',compact('types','user','the_pro','notes','replies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
          
          'name' => 'required',
          'price'=>'required',
          'bed'  => 'required',
          'bath' => 'required',
          'kitchen'=>'required',
          'address' => 'required',
          'type_id' => 'required',
          'image'=> 'required',
           // 'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'utilities'=>'required',
          'propert_desc'=>'required'


        ]);

        $input = $request->all();

        if($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();

            $file->move('property_images',$name);

            $input['image'] = $name;

            
        }

        
         
        $input['utilities'] = $request->input('utilities');
        
        $sam = implode(",",$input['utilities']);

        $input['utilities'] = $sam;

        Property::create($input);

        Session::flash('the_success','Property has been created');

        return redirect()->route('property.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $property = Property::findOrFail($id);
       $notes = Note::all();
       $replies = Reply::all();
       // return $property;

       return view('property.show',compact('property','notes','replies'));
    }


     public function theshow($id)
    {
       $property = Property::findOrFail($id);

       $tenants = Tenant::all();

       $notes = Note::all();
       $replies = Reply::all();

       return view('property.theshow',compact('property','tenants','notes','replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $tenant = Tenant::all();
        $notes = Note::all();
        $replies = Reply::all();

        return view('property.edit',compact('property','tenant','notes','replies'));
    }


     public function editProperty($id)
    {
        $editproperty = Property::findOrFail($id);
        $tenant = Tenant::all();
        $notes = Note::all();
        $replies = Reply::all();

        $types = Type::all();
        $user = Auth::user();
        
        $the_id = $user->id;

        $the_pro = Property::where('user_id','=',$the_id)->get();
        
        return view('property.editproperty',compact('tenant','editproperty','types','user','the_pro','notes','replies'));

       
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
         $input = $request->all();

        if($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();

            $file->move('property_images',$name);

            $input['image'] = $name;

            
        }

        
         
        $input['utilities'] = $request->input('utilities');
        
        $sam = implode(",",$input['utilities']);

        $input['utilities'] = $sam;

        $property = Property::findOrFail($id);

        $property->update($input);

        Session::flash('the_success','Property has been updated');

        return redirect()->back();
    }

    public function updatepropTent(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $input = $request->all();

        $property->update($input);

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
        $landlord = Landlord::findOrFail($id);

        $landlord->delete();

        Session::flash('the_user','Landlord has been updated!');

        return redirect()->route('property.create');
    }


    public function allProperty()
    {
        $properties = Property::all();

        $replies = Reply::all();

        $notes = Note::all();

        return view('property.mortgage',compact('properties','replies','notes'));
    }


     public function Active(Request $request,$id){

        $prop = Property::findOrFail($id);

        $input = $request->all();

        $prop->update($input);

        Session::flash('the_success','Status is Active!');

        return redirect()->route('property.index');
    }

    public function notActive(Request $request,$id){

        $prop = Property::findOrFail($id);

        $input = $request->all();

        $prop->update($input);

        Session::flash('the_succ','Status is not Active!');

        return redirect()->route('property.index');
    }


    // public function getlandId($id){
        

    //     $types = Type::all();
    //     $user = Auth::user();

    //     $the_id = $user->id;

    //     $the_landlord = Landlord::where('user_id','=',$the_id)->get();

    //     return view('landlordproperty');
    // }


    // public function renantedit($id)
    // {
    //     $property = Property::findOrFail($id);

    //     return view('property.theshow',compact('property'));
    // }




}
