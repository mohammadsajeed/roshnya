<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Image;
use App\Models\Slider;

class SliderControler extends Controller
{
    public function index(){
        $read_slider = Slider::OrderBy('id','desc')->get();

        return view('livewire.backend.AdminPanel.slider',compact('read_slider'));
    }
    public function add_slider(Request $req){
         $req->validate([
             'title'=> 'required',
             'description'=> 'required',
             'picture'=> 'required',
         ]);

         $img = $req->picture;
         $filename = $img->getClientOriginalName();
         $imageresize = image::make($img->getRealPath());
         $imageresize->resize(1920,1280);
         $imageresize->save(public_path('images/'.$filename));


         Slider::create([
            'title'=> $req->title,
            'description'=> $req->description,
            'pic'=> $filename,


         ]);
         session()->flash('msg',' Your Data Has been Saved ');
         return redirect('slider');
    }
    public function slider_delete($id){
        $delete_slider =  Slider::find($id);

        unlink('images/'.$delete_slider->pic);
        $delete_slider->delete();
        session()->flash('delete',' Row Has been Deleted');
    return redirect('slider');
    }

}
