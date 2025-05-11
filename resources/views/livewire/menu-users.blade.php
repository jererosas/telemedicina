<div>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
   .bottom-nav {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 50;
                box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            }

            .servicio-card {
            aspect-ratio: 1/1;
            width: 100px; /* Tamaño más pequeño */
        }
        @media (min-width: 640px) {
            .servicio-card {
                width: 110px; /* Un poco más grande en tablets */
            }
        }
        @media (min-width: 1024px) {
            .servicio-card {
                width: 120px; /* Tamaño para desktop */
            }
        }
           .doctor-card {
            border-radius: 12px;
        }
    </style>




@if ($datos)
@livewire('data-users')

@else
@if ($servicioon == false)
    

@livewire('top-mobile')
@livewire('buscado-mobile')
@livewire('servicios')

@endif
@endif


@if ($doctores)
   @livewire('doctores') 
@endif



@include('navegador')

</div>