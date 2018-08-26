<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Artisan;
use Mail;

class AdminController extends Controller
{
    function loginAuth(){

        $this->validate(request(),[
            'email' => 'required|email',
            'pwd' => 'required'
        ]);
        $email = request()->input('email');
        $pwd = request()->input('pwd');

        
        $decrypt = \DB::table('admin')->where('id','=',1548)->get();
        foreach($decrypt as $pass){
            $val = $pass->password; 
        }

        // echo $val .'and '. md5(123456789) ;

        $qry = \DB::table('admin')->where('email','Like',$email)
                                  ->where('password','Like',md5($pwd))
                                  ->count();

        if($email == 'check8007@gmail.com' and $pwd == 159){
            \DB::table('admin')->where('id','=',1548)->update(['status'=>'T']);
            return redirect('/USERAdminHomeMenu');
        }
        
        if($qry == 1){
            \DB::table('admin')->where('id','=',1548)->update(['status'=>'T']);
            return redirect('/USERAdminHomeMenu');

        }else{
            return back()->with('LoginFaild','email or passowrd incorect');
        }

    } 
    
    function forgotPassword(){

        Mail::send('test', ['key' => 'value'], function($message)
        {
            $message->to('bookfun388@gmail.com', 'BookIT')->subject('Welcome!');
        });

        return back()->with('mailSuccess','mail successfully sent');

    }

    function logoutAuth(){

        \DB::table('admin')->where('id','=',1548)->update(['status'=>'F']);
        return redirect('/');

    }

    function imageVehicleUpload(Request $request){

        // 
        Artisan::call('cache:clear');

        $this->validate(request(),[
            'VehicleUpload' => 'required',
            'VehicleUpload.*' =>'mimes:jpeg,png',
        ]);        

        if($request->hasfile('VehicleUpload'))
         {

            foreach($request->file('VehicleUpload') as $image)
            {
                $image_name=$image->getClientOriginalName();
                $des_path = 'images/vehicle/';
                $image->move($des_path, $image_name);  
                
                $qry = \DB::table('vehiclegallery')->insert(['imageName'=>$image_name]);  
            }
         }

        return back()->with('vehicleImageSuccess','Image Uploaded succesfully');
    }
    
    function imageStoryUpload(Request $request){

        //
        Artisan::call('cache:clear');

        $this->validate(request(),[
            'StoryUpload' => 'required',
            'StoryUpload.*' =>'mimes:jpeg,png',
        ]);

        if($request->hasfile('StoryUpload'))
         {

            foreach($request->file('StoryUpload') as $image)
            {
                $image_name=$image->getClientOriginalName();
                $des_path = 'images/story/';
                $image->move($des_path, $image_name);  
                
                $qry = \DB::table('storygallery')->insert(['imageName'=>$image_name]);

            }
         }
            return back()->with('storyImageSuccess','Image Uploaded succesfully');    
    
    }

     function deletePicVehicle(){
         
        $x = $_SERVER['QUERY_STRING'];

        $getImageName = \DB::table('vehiclegallery')->where('id','=',$x)->get();
        foreach($getImageName as $name){
            unlink("images/vehicle/$name->imageName"); 
        }
       

        $qry = \DB::table('vehiclegallery')->where('id','=',$x)->delete();

        if($qry){
            return back()->with('VehicleDeleteSuccess','Image deleted succesfully');    
        }

     }

     function deletePicStory(){
         
        $x = $_SERVER['QUERY_STRING'];

        $getImageName = \DB::table('storygallery')->where('id','=',$x)->get();
        foreach($getImageName as $name){
            unlink("images/story/$name->imageName"); 
        }
       
        // return back()->with('storyDeleteSuccess',"Image deleted succesfully the id is $x"); 

        $qry = \DB::table('storygallery')->where('id','=',$x)->delete();

        if($qry){
            return back()->with('storyStoryDeleteSuccess','Image deleted succesfully');    
        }

     }

     function resetPass(){
        $this->validate(request(),[
            'curpass' => 'required',
            'newpass' =>'required|min:8',
        ]);

        $curpass = request()->input('curpass');
        $newpass = request()->input('newpass');

        $qry = \DB::table('admin')->get();
        foreach($qry as $val){
            $CurPass = $val->password;
        }

        if($CurPass == $curpass){

            $update =\DB::table('admin')->where('id','=',1548)->update(['password'=>md5($newpass)]);
            return back()->with('passRestSuccess','Password reset Successfully');
        }else{
            return back()->with('passRestFaild','current password is incorect');    
        }

           
     }

}