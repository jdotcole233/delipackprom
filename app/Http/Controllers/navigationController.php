<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigationController extends Controller
{
    public function about(){
        return view('officialpages.about');
    }

     public function services(){
        return view('officialpages.services');
    }


     public function partners(){
        return view('officialpages.partners');
    }


     public function contact(){
        return view('officialpages.contact');
    }
}
