<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{

    public $fname;
    public function render()
    {
        return view('livewire.test')->layout('layouts.backend');
    }
}
