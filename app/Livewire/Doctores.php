<?php

namespace App\Livewire;

use Livewire\Component;

class Doctores extends Component
{
    public $datos = false;
    public function render()
    {
        return view('livewire.doctores');
    }


    public function doc ($id) {
        
        $this->datos = true;
    }
}
