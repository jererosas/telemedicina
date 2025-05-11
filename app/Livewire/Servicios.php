<?php

namespace App\Livewire;

use Livewire\Component;

class Servicios extends Component
{
    public function render()
    {
        return view('livewire.servicios');
    }
    public function doctores ($id) {
        
       $this->dispatch('d1', vista: $id);
    }
}
