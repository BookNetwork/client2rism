<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Artisan;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
                                  ->where('password','Like',$pwd)
                                  ->count();
         /////////////////////////////////////////                         ///////////////////////////////////////////////
        // if($email == 'check8007@gmail.com' and $pwd == 159){
        //     \DB::table('admin')->where('id','=',1548)->update(['status'=>'T']);
        //     return redirect('/USERAdminHomeMenu');
        // }
        ////////////////////////////////////////////                     ////////////////////////////////
        if($qry == 1){
            \DB::table('admin')->where('id','=',1548)->update(['status'=>'T']);
            return redirect('/USERAdminHomeMenu');

        }else{
            return back()->with('LoginFaild','email or passowrd incorect');
        }

    } 
    
    function forgotPassword(){

        $pass = \DB::table('admin')->where('id','=',1548)->get();

        foreach($pass as $val){
            $pwd = $val->password;
            $name = $val->name;
            $email = $val->email;
        }
        
        $data = array('password'=>$pwd,  'name'=>$name);

        Mail::send('mails.forgotPassMail', $data, function($message) {
            $message->to('naftourism@gmail.com', 'Naffly')->subject('NAF TOURISM website');
            $message->from('naftourismwebsite@gmail.com','nafTourism');
         });
         Mail::send('mails.forgotPassMail', $data, function($message) {
            $message->to('naftourism@outlook.com', 'Naffly')->subject('NAF TOURISM website');
            $message->from('naftourismwebsite@gmail.com','nafTourism');
         });

        return back()->with('mailSuccess','mail successfully sent');
    }

    function logoutAuth(){

        \DB::table('admin')->where('id','=',1548)->update(['status'=>'F']);
        return redirect('/');

    }

    function imageVehicleUpload(Request $request){

        // 
        // Artisan::call('cache:clear');

        $this->validate(request(),[
            'VehicleUpload' => 'required',
            'VehicleUpload.*' =>'mimes:jpeg,png',
        ]);        

        if($request->hasfile('VehicleUpload'))
        {

            foreach($request->file('VehicleUpload') as $image)
            {
                
                $image_name=$image->getClientOriginalName();
                $filePath = 'images/vehicle/'.$image_name; 
                $des_path = 'images/vehicle/';  

                    if(file_exists($filePath)) {
                        return back()->with('vehicleImageFaild','If You upload 1 images thats names and the current uploaded image file are got same name, 
                        if else you upload two more images have the same name and one of the file contains existing files name then 
                        sometimes it was ignore the images! So please check and upload the images');    
                    }else {
                        $image->move($des_path, $image_name);  
                        $qry = \DB::table('vehiclegallery')->insert(['imageName'=>$image_name]);  
                    }
                    
            }

                if($qry){
                    return back()->with('vehicleImageSuccess','Image Uploaded successfully');    
                }else{
                    return back()->with('vehicleImageFaild','Image size is too Large');    
                }
           
        }else{
            return back()->with('vehicleImageFaild','Image size is too Large');    
        }
    
    }
    
    function imageStoryUpload(Request $request){

        //
        // Artisan::call('cache:clear');

        $this->validate(request(),[
            'StoryUpload' => 'required',
            'StoryUpload.*' =>'mimes:jpeg,png',
        ]);

        if($request->hasfile('StoryUpload'))
         {

            foreach($request->file('StoryUpload') as $image)
            {
                    $image_name=$image->getClientOriginalName();
                    $filePath = 'images/story/'.$image_name; 
                    $des_path = 'images/story/';
    
                        if(file_exists($filePath)) {
                            return back()->with('storyImageFaild','If You upload 1 images thats names and the current uploaded image file are got same name, 
                            if else you upload two more images have the same name and one of the file contains existing files name then 
                            sometimes it was ignore the images! So please check and upload the images');    
                        }else {
                            $image->move($des_path, $image_name);  
                            $qry = \DB::table('storygallery')->insert(['imageName'=>$image_name]);
                        }   
                    
            }

            if($qry){
                return back()->with('storyImageSuccess','Image Uploaded successfully');    

            }else{
                return back()->with('storyImageFaild','Image size is too Large');    

            }

         }else{
            return back()->with('storyImageFaild','Image size is too Large'); 
         }

       
    
    }

     function deletePicVehicle(){
         
        $x = $_SERVER['QUERY_STRING'];

        $getImageName = \DB::table('vehiclegallery')->where('id','=',$x)->get();
        foreach($getImageName as $name){
            $qry = \DB::table('vehiclegallery')->where('id','=',$x)->delete();
            unlink("images/vehicle/$name->imageName"); 
            if($qry){
                return back()->with('VehicleDeleteSuccess','Image deleted successfully');    
            }
        }
       
     }

     function deletePicStory(){
         
        $x = $_SERVER['QUERY_STRING'];

        $getImageName = \DB::table('storygallery')->where('id','=',$x)->get();
        foreach($getImageName as $name){
            $qry = \DB::table('storygallery')->where('id','=',$x)->delete();
            unlink("images/story/$name->imageName"); 
            if($qry){
                return back()->with('StoryDeleteSuccess','Image deleted successfully');    
            }
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

            $update =\DB::table('admin')->where('id','=',1548)->update(['password'=>$newpass]);
            return back()->with('passRestSuccess','Password reset Successfully');
        }else{
            return back()->with('passRestFaild','current password is incorect');    
        }
           
     }

}