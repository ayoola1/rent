<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\Tenant;

use App\User;

use App\Type;

use App\Note;

use App\Landlord;

use App\Property;

use App\Reply;

class NoteController extends Controller
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
        return view('note.index',compact('notes','replies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('note.create');
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

             'title' =>'required',
             'body' => 'required'
        ]);

        $input = $request->all();

        Note::create($input);

        Session::flash('the_success','Your Application has been sent!');

        return redirect()->back();
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
        $property = Property::findOrFail($id);
        return view('note.show',compact('property','notes','replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Note::all();
        $nnote = Note::findOrFail($id);
        $replies = Reply::all();
        // $theproper = Property::where('property_id','=',$note->property->id)->get();
        return view('note.edit',compact('nnote','notes','replies'));
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


    public function specificNote($id){
       
        $nnote = Note::findOrFail($id);

        $notes = Note::all();

        $replies = Reply::all();

        return view('note.specnote',compact('nnote','notes','replies'));
    }


      public function Approved(Request $request,$id){

        $not = Note::findOrFail($id);

        $input = $request->all();

        $not->update($input);

        Session::flash('the_success','Application  is Approved!');

        return redirect()->back();
    }

    public function notApproved(Request $request,$id){

        $not = Note::findOrFail($id);

        $input = $request->all();

        $not->update($input);

        Session::flash('the_success','Appication is not Approved!');

        return redirect()->back();
    }
}
