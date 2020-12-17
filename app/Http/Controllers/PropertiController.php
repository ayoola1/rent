<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function property_index()
    {
        return view ('properti.property-index');
    }

    public function property_show(){
        return view ('properti.property-show');
    }
}
