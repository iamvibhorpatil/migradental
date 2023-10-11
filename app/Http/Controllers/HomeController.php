<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.index');
    }
    public function treatment(){
        return view('layouts.treatment');
    }
    public function special(){
        return view('layouts.special');
    }
    public function international(){
        return view('layouts.international');
    }
    public function video(){
        return view('layouts.video');
    }
    public function testimonial(){
        return view('layouts.testimonial');
    }
    public function about(){
        return view('layouts.about');
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function orofacial_pain(){
        return view('layouts.orofacial_pain');
    }
    public function blog(){
        return view('layouts.blogs');
    }
    public function laser_dentistry(){
        return view('layouts.laser_dentistry');
    }
    public function image(){
        return view('layouts.image');
    }
    
}
