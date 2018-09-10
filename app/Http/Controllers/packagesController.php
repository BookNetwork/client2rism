<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class packagesController extends Controller
{
    function packageContactPackage1(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'noOfPeople' => 'required',
            'Adults' => 'required',
            'textArea' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $date = request()->input('date');
        $noOfPeople = request()->input('noOfPeople');
        $Adults = request()->input('Adults');
        $Children = request()->input('Children');
        $message = request()->input('textArea');

        echo $name.' '.$email.' '.$date.' '.$noOfPeople.' '.$Adults.' '.$Children;

        $data = array('n'=>$name, 'e'=> $email,'d' => $date,'noOfPeople' => $noOfPeople, 'Adults' => $Adults, 'Children'=> $Children ,'mess' => $message);

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@gmail.com', 'Naffly')->subject('More Request Details - PACKAGE_01');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
         });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@outlook.com', 'Naffly')->subject('More Request Details - PACKAGE_01');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });
        Mail::send('mails.packages', $data, function($message) {
            $message->to('info@naftourism.com', 'Naffly')->subject('More Request Details - PACKAGE_01');
            $message->from('naftourismwebsite@gmail.com','nafTourism');
         });
        
        return back()->with('RequestmoreDetailsSuccess','Submitted Successfully, We will been contact you soon!');
    }

    function packageContactPackage2(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'noOfPeople' => 'required',
            'Adults' => 'required',
            'textArea' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $date = request()->input('date');
        $noOfPeople = request()->input('noOfPeople');
        $Adults = request()->input('Adults');
        $Children = request()->input('Children');
        $message = request()->input('textArea');

        echo $name.' '.$email.' '.$date.' '.$noOfPeople.' '.$Adults.' '.$Children;

        $data = array('n'=>$name, 'e'=> $email,'d' => $date,'noOfPeople' => $noOfPeople, 'Adults' => $Adults, 'Children'=> $Children ,'mess' => $message);

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@gmail.com', 'Naffly')->subject('More Request Details - PACKAGE_02');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
         });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@outlook.com', 'Naffly')->subject('More Request Details - PACKAGE_02');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });
        Mail::send('mails.packages', $data, function($message) {
            $message->to('info@naftourism.com', 'Naffly')->subject('More Request Details - PACKAGE_02');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });
        
        return back()->with('RequestmoreDetailsSuccess','Submitted Successfully, We will been contact you soon!');
    }

    function packageContactPackage3(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'noOfPeople' => 'required',
            'Adults' => 'required',
            'textArea' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $date = request()->input('date');
        $noOfPeople = request()->input('noOfPeople');
        $Adults = request()->input('Adults');
        $Children = request()->input('Children');
        $message = request()->input('textArea');

        echo $name.' '.$email.' '.$date.' '.$noOfPeople.' '.$Adults.' '.$Children;

        $data = array('n'=>$name, 'e'=> $email,'d' => $date,'noOfPeople' => $noOfPeople, 'Adults' => $Adults, 'Children'=> $Children ,'mess' => $message);

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@gmail.com', 'Naffly')->subject('More Request Details - PACKAGE_03');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@outlook.com', 'Naffly')->subject('More Request Details - PACKAGE_03');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('info@naftourism.com', 'Naffly')->subject('More Request Details - PACKAGE_03');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });
        
        return back()->with('RequestmoreDetailsSuccess','Submitted Successfully, We will been contact you soon!');
    }

    function packageContactPackage4(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'noOfPeople' => 'required',
            'Adults' => 'required',
            'textArea' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $date = request()->input('date');
        $noOfPeople = request()->input('noOfPeople');
        $Adults = request()->input('Adults');
        $Children = request()->input('Children');
        $message = request()->input('textArea');

        echo $name.' '.$email.' '.$date.' '.$noOfPeople.' '.$Adults.' '.$Children;

        $data = array('n'=>$name, 'e'=> $email,'d' => $date,'noOfPeople' => $noOfPeople, 'Adults' => $Adults, 'Children'=> $Children ,'mess' => $message);

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@gmail.com', 'Naffly')->subject('More Request Details - PACKAGE_04');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('naftourism@outlook.com', 'Naffly')->subject('More Request Details - PACKAGE_04');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });

        Mail::send('mails.packages', $data, function($message) {
            $message->to('info@naftourism.com', 'Naffly')->subject('More Request Details - PACKAGE_04');
            $message->from('naftourismwebsite@gmail.com','nafTourismWebsite');
        });
        
        return back()->with('RequestmoreDetailsSuccess','Submitted Successfully, We will been contact you soon!');
    }
}
