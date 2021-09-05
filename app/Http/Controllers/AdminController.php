<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use\App\Models\Application;

use\App\Models\Contactinfo;

use\App\Models\News;

use\App\Models\Complain;

use\App\Models\Appeal;

use\App\Models\Bank;

use\PDF;



class AdminController extends Controller
{


    //pending applications view 

    public function applications(){

       // $data=application::all();

       $data=DB::table('applications')->where('status', 'pending')->get();



        return view("admin.applica",compact("data"));
    }

    //rejected applications view

    public function reject(){

       
 
        $data=DB::table('applications')->where('status', 'rejected')->get();
 
 
 
         return view("admin.reject",compact("data"));
     }


     //approved applications view 

    public function approved(){

       
 
        $data=DB::table('applications')->where('status', 'approved')->get();
 
 
 
         return view("admin.approved",compact("data"));
     }




    // user contacts view

    public function contact(){

         $data=contactinfo::all();
 
       
 
 
         return view("admin.contact",compact("data"));
     }

     
     //user contacts delete

    public function deletecon($id){

        $data=contactinfo::find($id);

       
        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }

     // application delete

    public function appdelete($id){

        $data=application::find($id);

      
        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }



    // application approve

    public function updateapp($id){

        $data=application::find($id);

        $st="approved";

        $data->status=$st;

        if($data->save()){
            alert()->success('Successfully Approved..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }

    // application reject

    public function rejectapp($id){

        $data=application::find($id);

        $st="rejected";

        $data->status=$st;

        if($data->save()){
            alert()->error('Rejected..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed..!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }

     // news delete

    public function deletenews($id){

        $data=news::find($id);

        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }
    

    //news view

    public function news(){

        $data=news::all();
 
 
        return view("admin.news",compact("data"));

       
    }
      
    //bank details view

    public function bankdetails(){

        $data=bank::all();
 
 
        return view("admin.bankview",compact("data"));

       
    }


    // bank details view for pdf generate

    public function details(){

        $data=bank::all();
 
 
        return view("admin.details",compact("data"));

       
    }

   
    //pdf download

    public function downloadpdf(){

        $data = bank::all();
       // view()->share('admin.bankview',$data);
       $pdf = PDF::loadView('admin.details',compact('data'));
       $pdf = PDF::loadView('admin.details', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);
       return $pdf->download('bankdetails.pdf');
      
      
    }





    // news upload

    public function uploadnews(Request $request){

        $validateData = $request->validate([
            'title' => 'required|max:200',
            'date' => 'required|max:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' =>'required',
            

        ]);
       
        $data = new news;

        $data->title=$request->title;
        $data->post_date=$request->date;

        $image=$request->image;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('newsimage',$imagename);
        $data->image=$imagename;

        $data->description=$request->description;
      
        
       
        if($data->save()){
            alert()->success('Successfully Posted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

    }


    // complains view


    public function viewcom(){

        $data=complain::all();

        return view("admin.complainsview",compact("data"));
    }



    // delete complains


    public function deletecomp($id){

        $data=complain::find($id);

        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }

   
    // delete bank details
    
    public function deletebank($id){

        $data=bank::find($id);

        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }


    // view appeals

    public function viewapp(){

        $data=appeal::all();

        return view("admin.appealview",compact("data"));
    }


    // delete appeals


    public function deleteapp($id){

        $data=appeal::find($id);

        
        if($data->delete()){
            alert()->success('Successfully Deleted..!!')->persistent('Close')->autoclose(3500);
        }else{
            alert()->error('Failed...!!')->persistent('Close')->autoclose(3500);

        }

        return redirect()->back();

      
    }



   










}
