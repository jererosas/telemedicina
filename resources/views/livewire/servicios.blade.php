<div class="bg-white">
   <div class="container mx-auto px-4 ">
        <!-- Encabezado con título y botón -->
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-sm font-medium text-gray-500">Servicios disponibles</h3>
            <button id="verMasBtn" class="flex items-center text-xs text-white bg-blue-400 hover:text-blue-700 px-3 py-1 rounded-full border border-gray-200 shadow-xs">
                <span>Ver más</span>
                <i class="fas fa-chevron-right ml-1 mx-2 text-xs"></i>
            </button>
        </div>

        <!-- Contenedor de servicios -->
        <div class="relative">
            <div id="serviciosContainer" class="flex overflow-x-auto space-x-3 pb-2 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                <!-- Servicio 1: Doctores -->
                <div wire:click="doctores(1)" class="servicio-item flex-shrink-0 flex items-center space-x-2 bg-white px-3 py-2 rounded-full border border-gray-200 shadow-xs">
                    <i class="fas fa-user-md text-blue-500 text-sm"></i>
                    <span class="text-sm font-medium text-gray-600">Doctores</span>
                </div>
                
                <!-- Servicio 2: Consultas Online -->
                <div class="servicio-item flex-shrink-0 flex items-center space-x-2 bg-white px-3 py-2 rounded-full border border-gray-200 shadow-xs">
                    <i class="fas fa-laptop-medical text-green-600 text-sm"></i>
                    <span class="text-sm font-medium text-gray-600">Consultas Online</span>
                </div>
                
                <!-- Servicio 3: Atención virtual -->
                <div class="servicio-item flex-shrink-0 flex items-center space-x-2 bg-white px-3 py-2 rounded-full border border-gray-200 shadow-xs">
                    <i class="fas fa-bolt text-warning text-sm"></i>
                    <span class="text-sm font-medium text-gray-600">Atención Virtual Inmediata</span>
                </div>
                
                <!-- Servicio 4: Recetas -->
                <div class="servicio-item flex-shrink-0 flex items-center space-x-2 bg-white px-3 py-2 rounded-full border border-gray-200 shadow-xs">
                    <i class="fas fa-prescription-bottle-alt text-orange-600 text-sm"></i>
                    <span class="text-sm font-medium text-gray-600">Recetas</span>
                </div>
                
                <!-- Servicio 5: Certificados -->
                <div class="servicio-item flex-shrink-0 flex items-center space-x-2 bg-white px-3 py-2 rounded-full border border-gray-200 shadow-xs">
                    <i class="fas fa-file-medical text-red-500 text-sm"></i>
                    <span class="text-sm font-medium text-gray-600">Certificados</span>
                </div>
               
            </div>
        </div>
    </div>
</div>