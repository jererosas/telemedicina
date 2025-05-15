<div class="bg-white">
    <div class="container mx-auto px-4 py-6">
        <!-- Encabezado con título y botón -->
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-sm font-medium text-gray-500">Especialidades Médicas</h3>
            <button id="verMasBtnx"
                class="flex items-center text-xs text-white bg-blue-400 hover:text-blue-700 px-3 py-1 rounded-full border border-gray-200 shadow-xs">
                <span>Ver más</span>
                <i class="fas fa-chevron-right ml-1 mx-2 text-xs"></i>
            </button>
        </div>

        <!-- Contenedor de especialidades -->
        <div class="relative">
            <div id="especialidadesContainerx" class="scroll-container flex space-x-4 pb-4 overflow-x-auto">
                <!-- Cardiología -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-red-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-heartbeat text-red-500 text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Cardiología</span>
                </div>

                <!-- Pediatría -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-baby text-blue-500 text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Pediatría</span>
                </div>

                <!-- Neurología -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-brain text-secondary text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Neurología</span>
                </div>

                <!-- Dermatología -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-allergies text-warning text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Dermatología</span>
                </div>

                <!-- Ginecología -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-female text-danger text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Ginecología</span>
                </div>

                <!-- Ortopedia -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-bone text-green-600 text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Ortopedia</span>
                </div>

                <!-- Oftalmología -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-indigo-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-eye text-secondary text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Oftalmología</span>
                </div>

                <!-- Psiquiatría -->
                <div
                    class="flex-shrink-0 w-24 h-24 bg-white rounded-lg shadow-sm border border-gray-100 flex flex-col items-center justify-center p-3 hover:shadow-md transition-shadow">
                    <div class="bg-teal-100 w-12 h-12 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-brain text-success text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 text-center">Psiquiatría</span>
                </div>
            </div>
        </div>
    </div>

    @script
    <script>
    const verMasBtnx = document.getElementById('verMasBtnx');
    const container = document.getElementById('especialidadesContainerx');
    const scrollAmount = 300; // Cantidad de desplazamiento por clic

    verMasBtnx.addEventListener('click', function() {
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });

        // Verificar si hemos llegado al final
        setTimeout(() => {
            const maxScroll = container.scrollWidth - container.clientWidth;
            if (Math.abs(container.scrollLeft - maxScroll) < 10) {
                // Si estamos cerca del final, volver al inicio
                setTimeout(() => {
                    container.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                }, 500);
            }
        }, 500);
    });

    $wire.on('react', () => {

        $(document).ready(function() {
            const verMasBtnx = document.getElementById('verMasBtnx');
            const container = document.getElementById('especialidadesContainerx');
            const scrollAmount = 300; // Cantidad de desplazamiento por clic

            verMasBtnx.addEventListener('click', function() {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });

                // Verificar si hemos llegado al final
                setTimeout(() => {
                    const maxScroll = container.scrollWidth - container.clientWidth;
                    if (Math.abs(container.scrollLeft - maxScroll) < 10) {
                        // Si estamos cerca del final, volver al inicio
                        setTimeout(() => {
                            container.scrollTo({
                                left: 0,
                                behavior: 'smooth'
                            });
                        }, 500);
                    }
                }, 500);
            });
        });
    });
    </script>
    @endscript
</div>