<div class="bg-white h-full">
@if ($datos == NULL)
  
@include('doctores')

@elseif ($datos)

@livewire('perfil-medico')

@endif
  
</div>