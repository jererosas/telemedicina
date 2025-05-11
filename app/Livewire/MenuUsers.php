<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class MenuUsers extends Component
{


    public $datos = false;
    public $servicioon = false;
    public $doctores = false;
    public function render()
    {


        $user = User::find(Auth::user()->id);
        
        if (!$user) {
            return false;
        }
        
        $camposRequeridos = ['dni', 'fecha', 'sexo', 'pais', 'provincia', 'telefono'];
        
        foreach ($camposRequeridos as $campo) {
            if (is_null($user->$campo)) {
               $this->datos = true;
            }
        }
        


 



        return view('livewire.menu-users');
    }

    public function home () {
          $this->servicioon = false;
           $this->doctores = false;
           //hola
    }

  #[On('d1')]
    public function views ($vista) {

        if ($vista == '1') {
           $this->servicioon = true;
           $this->doctores = true;
        }
    }
}
