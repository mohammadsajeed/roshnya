<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Slider extends Component
{

    public $fname;
    public $SliderDescription;
    public $file ;


    public function render()
    {
        return view('livewire.backend.slider')->layout('layouts.backend');
    }

    // public function tos(){

    //     $this->dispatchBrowserEvent('alert',[
    //         'type'=>'success',
    //         'message'=>"Category Created Successfully!!"
    //     ]);



    // }
}
