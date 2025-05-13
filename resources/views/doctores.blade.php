  <div class="max-w-md mx-auto px-4 py-3">
        <div class="mx-auto px-4 py-3 flex justify-between items-center">
            <h4 class="font-medium text-gray-700">Doctores</h4>
        </div>

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
                    <p class="text-sm text-gray-400">Pediatra</p>

                    <!-- Horario -->
                    <div class="flex items-center text-sm text-gray-600 mb-2">
                        <i class="far fa-clock mr-2 text-gray-400"></i>
                        <span>08:00 - 17:00</span>
                    </div>
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
                <div class="flex items-center px-2 py-1 rounded-full border border-success">
                    <div class="w-2 h-2  rounded-full bg-green-500 mr-2"></div>
                    <span class="text-xs text-gray-600">En línea</span>
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
                    <p class="text-sm text-gray-400">Pediatra</p>

                    <!-- Horario -->
                    <div class="flex items-center text-sm text-gray-600 mb-2">
                        <i class="far fa-clock mr-2 text-gray-400"></i>
                        <span>08:00 - 17:00</span>
                    </div>
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
                <div class="flex items-center px-2 py-1 rounded-full border border-success">
                    <div class="w-2 h-2  rounded-full bg-green-500 mr-2"></div>
                    <span class="text-xs text-gray-600">En línea</span>
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