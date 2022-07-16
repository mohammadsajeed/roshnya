<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;
use Image;

class donorController extends Controller
{
     public function index()
     {
        $read_donor = donor::OrderBy('id','desc')->get();
        return view('livewire.backend.AdminPanel.donor',compact('read_donor'));
     }

    public function add_donor(Request $req)
    {
        $req->validate([
            'organizationName'=> 'required',
            'description'=> 'required',
            'picture'=> 'required',
        ]);

        $img = $req->picture;
        $filename = $img->getClientOriginalName();
        $imageresize = image::make($img->getRealPath());
        $imageresize->resize(135,135);
        $imageresize->save(public_path('images/'.$filename));

           $inset_donor = donor::create([
           'organization_name'=> $req->organizationName,
           'description'=> $req->description,
           'pic'=> $filename,
        ]);

      if ($inset_donor) {
                session()->flash('msg','Your Data Has Been Inserted');
                return  redirect('donors');
      }else{
            session()->flash('w','Please Check Your Data');
                return  redirect('donors');
         }
    }
    public function donor_delete($id){
        $delete_donor =  donor::find($id);

        unlink('images/'.$delete_donor->pic);
        $delete_donor->delete();
        session()->flash('delete',' Row Has been Deleted');
    return redirect('donros');
    }
}
