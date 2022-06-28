<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Jobs extends Component
{

    public function render()
    {
        return view('livewire.backend.jobs')->layout('lay.base');
    }
}
