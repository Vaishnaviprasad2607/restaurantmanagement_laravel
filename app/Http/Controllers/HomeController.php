<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Slide;
use App\Models\Food;
use App\Models\news;
class HomeController extends Controller
{

   public function redirect()
   {
    $usertype=Auth::user()->usertype;
    if(Auth::id()){
    if($usertype=='1')
    {
        return view('admin.home');
    }
    else{
        $data=food::all();
        $slide=Slide::where('status','0')->get();
        $news=news::all();
        return view("userhome",compact("data","slide","news"));
    }
   }}
   public function index()
   {
     $data=food::all();
     $slide=Slide::where('status','0')->get();
     $news=news::all();
     return view("home",compact("data","slide","news"));
   }
   public function contact()
   {
       return view("contact");
   }
   public function parallax()
   {
       return view("parallax");
   }
}

