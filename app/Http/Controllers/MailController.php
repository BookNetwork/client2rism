<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function basic_email(){
        // $data = array('name'=>"Virat Gandhi");
     
        Mail::send(['text'=>'mail'], ['name'=>"Virat Gandhi"], function($message) {
           $message->to('bookfun388@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
           $message->from('check8007@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
}
