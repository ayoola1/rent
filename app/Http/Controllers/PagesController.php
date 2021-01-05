<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;

class PagesController extends Controller
{
    public function listing(){

        $properties = Property::all();
        return view ('newpages.listings',compact('properties'));
    }

    public function single($id){
        $property = Property::findOrFail($id);
        return view ('newpages.single',compact('property'));
    }

    public function faq(){
        return view ('pages.faq');
    }

    public function gallery(){
        return view ('pages.gallery');
    }

    public function service(){
        return view ('pages.service');
    }

    public function terms(){
        return view ('pages.terms');
    }
}
