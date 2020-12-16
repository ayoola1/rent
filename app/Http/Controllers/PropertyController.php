<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function property_index()
    {
        return view ('property.property-index');
    }

    public function property_show(){
        return view ('property.property-show');
    }
}
