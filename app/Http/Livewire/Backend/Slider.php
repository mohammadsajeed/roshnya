<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.backend.slider')->layout('layouts.backend');
    }
}
