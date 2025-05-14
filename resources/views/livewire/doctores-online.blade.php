<div class="bg-white">
    <div class="container mx-auto px-4">
        <!-- Encabezado con título y botón -->
        <div class="flex  mb-2">
            <h3 class="text-sm font-medium text-gray-500">Doctores Online</h3>
            
        </div>


        <div class="relative">



            <!-- Card Doctor 1 -->
            <div class="bg-white doctor-card shadow-sm overflow-hidden mb-4">
                <div wire:click="doc(1)" class="flex p-4">
                    <!-- Foto de perfil -->
                    <div class="mr-4 flex-shrink-0">
                        <img class="h-16 w-16 rounded-lg object-cover"
                            src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="Dr. González">
                    </div>

                    <!-- Información principal -->
                    <div class="flex-grow px-2">
                        <h2 class="font-semibold text-lg text-gray-600">Dra. Laura Martínez</h2>


                        <!-- Horario -->
                        <div class="flex items-center text-sm text-gray-600 ">
                            <i class="far fa-clock mr-2 text-gray-400"></i>
                            <span>08:00 - 17:00 </span>
                            <i class="fa-solid fa-dollar-sign text-gray-400 mr-1 mx-2"></i>
                            <span>1000 </span>
                        </div>
                        <p class="text-sm text-gray-400">Pediatra</p>

                    </div>
                </div>

                <!-- Info inferior horizontal (full width) -->
                <div class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-100">
                    <!-- Certificados -->
                    <div class="flex items-center px-2 py-1 rounded-full  border border-success">
                        <span class=" text-gray-600 text-xs   rounded-full flex items-center">
                            <i class="ri-file-text-fill mr-2 text-success"></i>
                            Certificados
                    </div>

                    <!-- Estado -->
                    <div class="flex items-center px-2 py-1 rounded-full  border border-success">
                        <span class=" text-gray-600 text-xs   rounded-full flex items-center">
                            <i class="fas fa-prescription-bottle-alt text-success mr-2"></i>
                            Recetas
                    </div>


                    <!-- Rating -->
                    <div class="flex items-center">

                        <span style="color: #f6e05e;"
                            class="border border-warning rounded-full px-2 py-0.5 font-semibold mr-2 text-sm"><i
                                class="fas fa-star"></i> 4.8</span>
                    </div>
                </div>
            </div>

            <!-- Card Doctor 1 -->
            <div class="bg-white doctor-card shadow-sm overflow-hidden mb-4">
                <div class="flex p-4">
                    <!-- Foto de perfil -->
                    <div class="mr-4 flex-shrink-0">
                        <img class="h-16 w-16 rounded-lg object-cover"
                            src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="Dra. Rodríguez">
                    </div>

                    <!-- Información principal -->
                    <div class="flex-grow px-2">
                        <h2 class="font-semibold text-lg text-gray-600">Dra. Laura Martínez</h2>
                        <div class="flex items-center text-sm text-gray-600 ">
                            <i class="far fa-clock mr-2 text-gray-400"></i>
                            <span>08:00 - 17:00 </span>
                            <i class="fa-solid fa-dollar-sign text-gray-400 mr-1 mx-2"></i>
                            <span>1000 </span>
                        </div>
                        <p class="text-sm text-gray-400">Pediatra</p>

                    </div>
                </div>

                <!-- Info inferior horizontal (full width) -->
                <div class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-100">
                    <!-- Certificados -->
                    <div class="flex items-center px-2 py-1 rounded-full  border border-success">
                        <span class=" text-gray-600 text-xs   rounded-full flex items-center">
                            <i class="ri-file-text-fill mr-2 text-success"></i>
                            Certificados
                    </div>

                    <!-- Estado -->
                    <div class="flex items-center px-2 py-1 rounded-full  border border-success">
                        <span class=" text-gray-600 text-xs   rounded-full flex items-center">
                            <i class="fas fa-prescription-bottle-alt text-success mr-2"></i>
                            Recetas
                    </div>

                    <!-- Rating -->
                    <div class="flex items-center">

                        <span style="color: #f6e05e;"
                            class="border border-warning rounded-full px-2 py-0.5 font-semibold mr-2 text-sm"><i
                                class="fas fa-star"></i> 4.8</span>
                    </div>
                </div>
            </div>





        </div>
    </div>

</div>