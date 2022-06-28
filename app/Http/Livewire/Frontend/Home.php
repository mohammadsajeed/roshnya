<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Slider;
use Livewire\Component;

class Home extends Component
{
    public $read_slider;
    public function render()
    {
        $this->read_slider = Slider::OrderBy('id','desc')->get();
        return view('livewire.frontend.home')->layout('webLayout.frontBase');
    }
}
