<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\User;

use App\Document;

use App\Note;

use App\Reply;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Document::all();
       $notes = Note::all();
       $replies = Reply::all();
       return view('document.index',compact('data','notes','replies'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $notes = Note::all();
         $replies = Reply::all();
        return view('document.create',compact('notes','replies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
            
          if($request->hasFile('file')){
              
              foreach ($request->file('file') as $file) {
                  
                  $name = time().$file->getClientOriginalName();

                 

                  $file->move('document_images',$name);

                  $data[] = $name;
              }
          }

           
            $input['file'] = json_encode($data);

            Document::create($input);


             Session::flash('the_success','Your Images has been uploaded!');

            return redirect()->back();





            // $input = $request->all();

            // if($file = $request->file('file')){

            //    $name = time() . $file->getClientOriginalName();

            //    $file->move('document_images',$name);

            //    $input['file'] = $name;
            // }

            //  Document::create($input);
        
            //  Session::flash('the_success','Your Images has been uploaded!');

            //  return redirect()->back;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::findOrFail($id);

        return view('');
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

    public function getDownload($file_name){

        $file_path = public_path('document_images/'.$file_name);
        return response()->download($file_path);
    }
}
