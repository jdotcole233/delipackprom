<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\CustomerRequest;
use App\Company;

class navigationController extends Controller
{

    
    public function about(){
        return view('officialpages.about');
    }

     public function services(){
        return view('officialpages.services');
    }


     public function partners(){
        $company_names = Company::all();
        return view('officialpages.partners', compact('company_names'));
    }


     public function contact(){
        return view('officialpages.contact');
    }

    public function clientRequest(Request $request){
        $message_send = ($request->message == null) ? "Need your service": $request->message;
        $mail_feed = Mail::to('support@delivpack.com')->send(new CustomerRequest($request->company_name, $request->phonenumber, $request->location, $message_send, $request->email));
        return response()->json($mail_feed);
    }


    public function delipackprivacy(){
        return view('officialpages.privacy');
    }
}
