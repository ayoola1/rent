<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view ('pages.about');
    }

    public function contact(){
        return view ('pages.contact');
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
