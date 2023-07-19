<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    //

    public function home(){
        return view('user.home');     
    }
    
    public function gallery(){
        return view('user.gallery'); 
    }
    
    
    public function course(){
        return view('user.course');     
    }
    
    public function course_details(){
         return view('user.course_details');     
     }
    
    public function blog(){
        return view('user.blog');     
    }

    public function contact(){
        return view('user.contact');
    }
    public function blog_single(){
        return view('user.blog_single');
    }
    public function error(){
        return view('user.error');
    }
}
