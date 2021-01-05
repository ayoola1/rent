<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use App\Wallet;

use App\Note;

use App\Reply;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $replies = Reply::all();
        $notes = Note::all();
        return view('wallet.index',compact('replies','notes'));
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

            'deposit' => 'required'

        ]);

        $input = $request->all();

        Wallet::create($input);

        Session::flash('the_success','Wallet has been funded!');

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
        $user_id = Auth::user()->id;
        $wallet = Wallet::where('user_id','=',$user_id)->first();
        $replies = Reply::all();
        $notes = Note::all();

        return view('wallet.show',compact('wallet','replies','notes'));
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

     public function withdraw($id)
    {
        $user_id = Auth::user()->id;
        $wallet = Wallet::where('user_id','=',$user_id)->first();
          $replies = Reply::all();
        $notes = Note::all();

        return view('wallet.withdraw',compact('wallet','replies','notes'));
    }

     public function withdrawupdate(Request $request, $id)
    {
        $wallet = Wallet::findOrFail($id);

        $input = $request->all();

        $wallet->update($input);

        Session::flash('the_success','Wallet has been withdrawn!');

        return redirect()->back();
    }
}
