<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
USE Image;

class volunteerController extends Controller
{
     public  function index()
     {
        $read_volunteer = volunteer::OrderBy('id','desc')->get();
         return view('livewire.backend.AdminPanel.volunteer',compact('read_volunteer'));
     }

     public function add_volunteer(Request $req)
     {
          $req->validate([
            'volunteerName'=>'required',
            'educationField'=>'required',
            'picture'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'description'=>'required',
          ]);

          $img = $req->picture;
          $filename = $img->getClientOriginalName();
          $imageresize = image::make($img->getRealPath());
          $imageresize->resize(1920,1280);
          $imageresize->save(public_path('images/'.$filename));



          $insert_volunteer = volunteer::create([
            'name'    => $req->volunteerName,
            'education_field'=>  $req->educationField,
            'description'=>  $req->description,
            'pic'=>    $filename,
            'address'=>  $req->address,
            'phone'=>  $req->phone,
            'email'=>  $req->email,
          ]);

          if ($insert_volunteer ) {
                session()->flash('msg','Volunteer Has been added');
                return redirect('volunteer');
          }else{
            session()->flash('w','please Check Your Data');
            return redirect('volunteer');
          }



     }

     public function volunteer_delete($id)
     {
           $delete_volunteer  = volunteer::find($id);
           unlink('images/'.$delete_volunteer->pic);

           $delete = $delete_volunteer->delete();
           if ( $delete) {
             session()->flash('delete','Row Has Been Deleted');
             return redirect('volunteer');
           }else{
            session()->flash('delete','Try agin');
            return redirect('volunteer');
           }
     }
}
