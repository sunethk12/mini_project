<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Application;

use App\Models\Contactinfo;

use App\Models\Complain;

use App\Models\Appeal;

use App\Models\Bank;



class UserController extends Controller
{
    public function app(){
        return view("user.app");
    }

    public function complain(){
        return view("user.complain");
    }


    // my application view

    public function my(){
       
        $u=Auth::user()->email;

        $data=DB::table('applications')->where('u_email',$u)->get();

        return view("user.myapp",compact("data"));
    }

   

       

      // appeal view


    public function again(){
        return view("user.appeal");
    }



    // application upload

    public function upload(Request $request){

        $validateData = $request->validate([
            'fullname' => 'required',
            'fmembers' => 'required',
            'nic' => 'required|min:10',
            'contact' =>'required|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required',
            'dsd' =>'required',
            'gsd' =>'required',
            'category' =>'required',
            
        ]);
   
        $data = new application;

        $data->name=$request->fullname;
        $data->no_of_members=$request->fmembers;
        $data->nic=$request->nic;
        $data->contact=$request->contact;
        $data->address=$request->address;
        $data->dsd=$request->dsd;
        $data->gsd=$request->gsd;
        $data->job=$request->job;
        $data->category=$request->category;
        $data->u_email=Auth::user()->email;

        $u=Auth::user()->email;

        $check=application::where([
            ['u_email','=', $u],
        ])->first();

        if($check){
            alert()->error('Failed..!! You have already filled your application.')->persistent('Close')->autoclose(3500);

        }else{
            $data->save();
            alert()->success('Your Application Successfully Saved..!!')->persistent('Close')->autoclose(3500);
            

        }


        return redirect()->back();

    }

    // user contacts save

    public function infosave(Request $request){


        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'contact' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'msg' =>'required',
            

        ]);
       

        $data = new contactinfo;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->msg=$request->msg;
      
        if($data->save()){
            alert()->success('Success..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Try Again...')->persistent('Close')->autoclose(3500);

        }

               
        return redirect()->back();

    }


    // complain save

    public function uploadcom(Request $request){


        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'contact' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gsd' =>'required',
            'complain' =>'required',
            

        ]);

       
        $data = new complain;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->gsd=$request->gsd;
        $data->complain=$request->complain;
        

        if($data->save()){
            alert()->success('Your Complain Successfully Saved..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Try Again...')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

    }


    // appeal save
    

    public function uploadapp(Request $request){

        $validateData = $request->validate([
            'name' => 'required',
            'nic' => 'required|max:10',
            'contact' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required',
            'gsd' =>'required',
            'reason' =>'required',
            

        ]);

       
        $data = new appeal;

        $data->name=$request->name;
        $data->nic=$request->nic;
        $data->contact=$request->contact;
        $data->address=$request->address;
        $data->gsd=$request->gsd;
        $data->reason=$request->reason;
        

        if($data->save()){
            alert()->success('Your Appeal Successfully Saved..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Try Again...')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

    }


    // bank details save

    public function bankup(Request $request){

        $validateData = $request->validate([
            'bname' => 'required',
            'branch' => 'required',
            'accname' =>'required',
            'accnumber' =>'required',
            

        ]);

        $u=Auth::user()->email;

        $check=bank::where([
            ['u_email','=', $u],
        ])->first();

      

       
        $data = new bank;

        $data->bname=$request->bname;
        $data->branch=$request->branch;
        $data->accname=$request->accname;
        $data->accnumber=$request->accnumber;
        $data->u_email=Auth::user()->email;
        
        if($check){
            alert()->error('Failed..!! You have already entered your bank account details.')->persistent('Close')->autoclose(3500);

        }else{
            $data->save();
            alert()->success('Your Bank Details Successfully Saved..!!')->persistent('Close')->autoclose(3500);
            

        }

        return redirect()->back();

    }






}
