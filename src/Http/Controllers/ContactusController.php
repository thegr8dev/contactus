<?php

namespace Thegr8dev\Contactus\Http\Controllers;

use App\Http\Controllers\Controller;
use Thegr8dev\Contactus\Mail\Contactus as MailContactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Thegr8dev\Contactus\Models\Contactus;

class ContactusController extends Controller
{
    public function getView(){
        return view('contactus::contact.contact');
    }

    public function post(Request $request){
        Contactus::create($request->all());
        $data = $request->all();
        /** Send a new mail also */
        
            Mail::to(config('contact.email_to'))->queue(new MailContactus($data));

        /** end */

        return back()->with('success','Message sent successfully !');
    }
}
