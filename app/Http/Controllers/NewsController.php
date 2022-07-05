<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Image;
use PhpParser\Node\Expr\FuncCall;

class NewsController extends Controller
{
     public  function index()
     {
        $read_news = news::OrderBy('id','desc')->get();
          return view('livewire.backend.AdminPanel.news',compact('read_news'));
     }

     public function add_news(Request $req)
     {
          $req->validate([
            'title'=>'required',
            'description'=>'required',
            'pic'=>'required',
            'date'=>'required',

          ]);

          $img = $req->pic;
          $filename = $img->getClientOriginalName();
          $imageresize = image::make($img->getRealPath());
          $imageresize->resize(1920,1280);
          $imageresize->save(public_path('images/'.$filename));

          $news_insert =  news::create([
            'title'=> $req->title,
            'description'=> $req->description,
            'pic'=> $filename,
            'date'=> $req->date,
          ]);
          if ($news_insert) {
                session()->flash('msg','Your data has been inserted');
                return redirect('news');

          }else {
            session()->flash('w','Please Check your Data ');
            return redirect('news');

          }

     }

     public function news_delete($id){

       $news_delete = news::find($id);

        unlink('images/'.$news_delete->pic);

         $news =  $news_delete->delete();
        if ($news) {
                session()->flash('delete',' Row has been deleted');
                return redirect('news');
        }else{
                session()->flash('w',' Row has been deleted');
                return redirect('news');
        }


     }
}
