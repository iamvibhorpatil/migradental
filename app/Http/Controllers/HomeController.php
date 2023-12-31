<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        
        $video = Video::where('display','Yes')->take('3')->get();
        $comment = Comment::where('display','Yes')->take('3')->get();
        return view('layouts.index',compact('video','comment'));
    }

    public function about()
    {
        return view('layouts.about');
    }
    public function contact()
    {
        return view('layouts.contact');
    }
    

   

}
