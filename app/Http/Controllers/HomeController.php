<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use\App\Models\News;

use\App\Models\Application;
use\App\Models\Contactinfo;
use\App\Models\Appeal;
use\App\Models\Complain;


class HomeController extends Controller
{
    public function index(){
       

        $data=news::all();
 
        return view("home",compact("data"));

    }

    public function about(){
        return view("about");
    }

    public function dash(){
        return view("user.dash");
    }

    

    public function redirects(){
       $usertype=Auth::user()->usertype;

       if($usertype=='1'){

        $count = application::where('status','=','pending')->count();
        $count2 = complain::all()->count();
        $count3 = appeal::all()->count();
        $data = contactinfo::all();
        $c = contactinfo::all()->count();


    


           return view('admin.adminhome',compact("count","count2","data","count3","c"));



       }else{
        $data=news::all();
 
           return view("home",compact("data"));
       }
    }


}
