<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
     public function index()
     {

        $read_proejct = project::OrderBy('id','desc')->get();
         return view('livewire.backend.AdminPanel.project',compact('read_proejct'));
     }
     public function add_project(Request $req)
     {
          $req->validate([
            'title'=> 'required',
            'picture'=> 'required',
            'date'=> 'required',
            'goal'=> 'required',
            'raised'=> 'required',
            'description'=>'required',
          ]);

          $img = $req->picture;
          $file_name = $img->getClientOriginalName($img);
          $images_resize = Image::make($img->getRealPath());
          $images_resize->resize(276,180);
          $images_resize->save(public_path('images/'.$file_name));

        //   $img = $req->pic;
        //   $filename = $img->getClientOriginalName();
        //   $imageresize = image::make($img->getRealPath());
        //   $imageresize->resize(1920,1280);
        //   $imageresize->save(public_path('images/'.$filename));

         $insert_project = project::create([
            'title'=> $req->title,
            'description'=> $req->description,
            'pic'=>  $file_name,
            'goal_money'=> $req->goal,
            'raised_money'=> $req->raised,
            'date'=> $req->date,

         ]);

         if ( $insert_project) {
                session()->flash('msg','Your Data Has Been Inserted');
                return  redirect('project');
         }else{
            session()->flash('w','Please Check Your Data');
                return  redirect('project');
         }



     }
     public function project_delete($id)
     {
          $project_delete = project::find($id);

            unlink('images/'.$project_delete->pic);

           $delete = $project_delete->delete();

           if ($delete) {
                session()->flash('delete','Row has been deleted');
                return redirect('project');
           }else{
            session()->flash('w',' Please Check Your Data');
                return redirect('project');

           }
     }
}
