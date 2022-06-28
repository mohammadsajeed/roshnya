<?php

namespace App\Http\Livewire\Backend;


use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;
use Image;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class SlideShow extends Component
{

    public $title;
    public $description;
    public $photo;


    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=> 'required',
            'description'=>'required',
             'picture'=>'required',
        ]);
    }
    public function  storeimage(){
        $filename = $this->picture->getClientOriginalName();
        $img = Image::make($this->picture);
     //   $imageResize = $img->resize(300,300);
         Storage::disk('public')->put( $filename , $img);


  }
    public function store(){
        $validate = $this->validate([
            'title'=> 'required',
            'description'=> 'required',
            'picture'=>'required',
        ]);

         //  $picture = $this->storeimage();

         $filename = $this->picture->getClientOriginalName();
         $img = Image::make($this->picture);
         $imageResize =  $img->resize(300,300);
          Storage::disk('public')->put( $filename , $img);




          Slider::create([
            'title' => $this->title,
            'description' => $this->description,
             'pic' =>$this->filename,
          ]);
        session()->flash('msg',' Data has been inserted successfully');



   }




    public function render()
    {
        return view('livewire.backend.slide-show')->layout('webLayout.backBase');

    }
}
