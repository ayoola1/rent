<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Reply;
use App\Note;

class ReplyController extends Controller
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
        $user_id = Auth::user()->id;
        $the_note = Note::where('user_id','=', $user_id)->get();
        return view('reply.index',compact('replies','notes','the_note'));
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
        $this->validate($request,[

             'title' =>'required',
             'body' => 'required'
        ]);

        $input = $request->all();

        Reply::create($input);

        Session::flash('the_success','Your reply has been sent!');

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

        $note = Note::findOrFail($id);

        $user_id = Auth::user()->id;
        $the_note = Note::where('user_id','=', $user_id)->get();

        return view('reply.show',compact('note','notes','the_note'));
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
        $replies = Reply::all();
        $note = Note::findOrFail($id);
        $user_id = Auth::user()->id;
        $the_note = Note::where('user_id','=', $user_id)->get();
        $nreply = Reply::findOrFail($id);
        // $theproper = Property::where('property_id','=',$note->property->id)->get();
        return view('reply.edit',compact('note','notes','nreply','replies','the_note'));
        
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
        //
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

     public function allReplies()
    {   
        $notes = Note::all();
        $replies = Reply::all();
        return view('reply.allreplies',compact('replies','notes'));
    }
}
