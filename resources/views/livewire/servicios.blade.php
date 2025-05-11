<div>
    <div class="max-w-7xl mx-auto bg-white ">
        <h2 class="text-xl  md:text-2xl font-bold text-gray-800 mb-6 text-center">Servicios</h2>

        <!-- Grid responsive -->
        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 md:gap-4 justify-center">
            <!-- Servicio 1 - Diseño Web -->

            <button wire:click="doctores(1)"
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">


                <div class="bg-blue-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">Doctores</h3>
            </button>

            <!-- Servicio 2 - Apps Móviles -->
            <div
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">
                <div class="bg-purple-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">Apps Móviles</h3>
            </div>

            <!-- Servicio 3 - Marketing -->
            <div
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">
                <div class="bg-green-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">Marketing</h3>
            </div>

            <!-- Servicio 4 - SEO -->
            <div
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">
                <div class="bg-yellow-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">SEO</h3>
            </div>

            <!-- Servicio 5 - Cloud -->
            <div
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">
                <div class="bg-indigo-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">Cloud</h3>
            </div>

            <!-- Servicio 6 - Soporte -->
            <div
                class="servicio-card bg-white p-3 rounded-lg shadow-sm hover:shadow transition-all duration-200 flex flex-col items-center justify-center mx-auto">
                <div class="bg-red-50 p-2 rounded-full mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xs md:text-sm font-medium text-gray-800 text-center">Soporte</h3>
            </div>
        </div>
    </div>
</div>