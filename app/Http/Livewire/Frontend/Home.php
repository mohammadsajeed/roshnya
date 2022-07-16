<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Slider;
use Livewire\Component;
use App\Models\project;
use App\Models\news;
use  App\Models\donor;

class Home extends Component
{
    public $read_slider;
    public $read_project;
    public $read_news;
    public $read_donor;
    public function render()
    {
        $this->read_slider = Slider::OrderBy('id','desc')->get();
        $this->read_project = project::OrderBy('id','desc')->get();
        $this->read_news = news::OrderBy('id','desc')->get();
        $this->read_donor = donor::OrderBy('id','desc')->get();

        return view('livewire.frontend.home')->layout('webLayout.frontBase');
    }
}
