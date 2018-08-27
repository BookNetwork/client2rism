<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class contactusController extends Controller
{
    function contactus(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'textArea' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $message = request()->input('textArea');

        echo  $message;

        $data = array('name'=>$name, 'email'=> $email, 'mess' => $message);

        Mail::send('mails.contactUs', $data, function($message) {
            $message->to('naftourism@gmail.com', 'null')->subject('Client Message');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
         });

        Mail::send('mails.contactUs', $data, function($message) {
            $message->to('naftourism@outlook.com', 'null')->subject('Client Message');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });

        return back()->with('contactSuccess','Submitted Successfully, We will been contact you soon!');
      
    }
}
