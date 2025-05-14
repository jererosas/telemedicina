<?php

namespace App\Livewire;

use Livewire\Component;

class BuscadoMobile extends Component
{
    public $search = '';
    public function render()
    {


        if ($this->search == !NULL) {
          
            $this->dispatch('busc', id: 1);

        } elseif ($this->search == NULL) { 
         $this->dispatch('busc', id: 2);
        }


        return view('livewire.buscado-mobile');
    }
}
