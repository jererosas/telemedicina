<?php

namespace App\Livewire;

use App\Models\Estados;
use App\Models\Paises;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DataUsers extends Component
{

    public $idc, $state, $dni, $telefono, $fecha;
    public $sexo = '';
    public $mostrarAnimacion = false;
    public $enviado = false;
    public $texto;

    public function render()
    {



        $paises = Paises::All();
  

        $estados = Estados::where('countryId', $this->idc)->get();




        return view('livewire.data-users',compact('paises', 'estados'));
    }


    public function completar () {

        $country = Paises::where('id', $this->idc)->first();
        
        User::updateOrCreate([
        'id'   => Auth::user()->id,
        ],[
        'sexo' => $this->sexo,
        'telefono' => $this->telefono,
        'pais' => $country->name,
        'provincia' =>  $this->state,
        'dni' => $this->dni,
        'fecha' => $this->fecha,
        ]);

        $this->texto = "Gracias por completar tu información.";
        $this->enviado = true;
        $this->mostrarAnimacion = true;
   

    }

 

}
