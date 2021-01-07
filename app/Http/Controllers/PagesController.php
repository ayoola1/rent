<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;

use App\User;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function listing(){

        $properties = Property::all();
        return view ('newpages.listings',compact('properties'));
    }

    public function single($id){
        $property = Property::findOrFail($id);
        $user = Auth::user();
        return view ('newpages.single',compact('property','user'));
    }

    // public function faq(){
    //     return view ('pages.faq');
    // }

    // public function gallery(){
    //     return view ('pages.gallery');
    // }

    // public function service(){
    //     return view ('pages.service');
    // }

    // public function terms(){
    //     return view ('pages.terms');
    // }
}
