<div class="container-fluid">
    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                @if(!$enviado)
                <div class="box-header">
                    <div class="box-title">
                        Información Personal / Paciente
                    </div>
                    <p>Para continuar necesitamos información para fines médicos.</p>
                </div>

                <hr>

                <div class="m-4 overflow-y-auto">

                    <form wire:submit="completar">
                        <div class="xl:col-span-6 col-span-12">
                            <label class="ti-form-label">Teléfono - WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroup-sizing-default">+54</span>

                                <input type="text" id="numericInput" placeholder="Introduzca su número de teléfono"
                                    name="numericInput" wire:model="telefono" class="form-control" maxlength="10"
                                    pattern="\d*" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" required>


                            </div>
                        </div>

                        <div class="xl:col-span-6 col-span-12 mt-3">
                            <label for="Customer" class="ti-form-label">DNI</label>
                            <input wire:model="dni" type="number" class="form-control " id="Customer"
                                placeholder="Introduzca su  DNI" required>
                        </div>

                        <div class="xl:col-span-6 col-span-12 mt-3">
                            <label class="ti-form-label">País</label>


                            <select wire:model.live="idc" class="form-control rounded-sm !py-2 !px-3" required>
                                <option disabled selected value> -- Seleccione una Opción -- </option>
                                @foreach($paises as $code)
                                <option value="{{ $code->id }}">{{ $code->name }}</option>
                                @endforeach
                            </select>



                        </div>
                    


                        <div class="xl:col-span-6 col-span-12 mt-3">
                            <label class="ti-form-label">Provincia / Estado</label>


                            <select name="states" wire:model="state" class="form-control rounded-sm !py-2 !px-3"
                                required>
                                <option disabled selected value> -- Seleccione una Opción -- </option>
                                @foreach($estados as $code)
                                <option value="{{ $code->name }}">{{ $code->name }}</option>
                                @endforeach
                            </select>



                        </div>
                   
                        <div class="xl:col-span-6 col-span-12 mt-3">
                            <label class="ti-form-label">Género</label>

                            <select wire:model="sexo" class=" form-control rounded-sm !py-2 !px-3" required>
                                <option disabled selected value> -- Seleccione una Opción -- </option>
                                <option value="1">Masculino</option>
                                <option value="2"> Femenino</option>
                                <option value="3">Otro</option>
                            </select>

                        </div>



                        <div class="xl:col-span-6 col-span-12 mt-3">
                            <label class="ti-form-label">Fecha de Nacimiento</label>

                            <input type="date" id="birthdate" wire:model="fecha" name="birthdate" class="form-control"
                                max="<?= date('Y-m-d'); ?>" required>

                        </div>
                        <button type="submit"
                            class="ti-btn ti-btn-primary btn-wave mt-3 w-full waves-effect waves-light">Continuar</button>
                    </form>


                </div>


                @endif

                @if($mostrarAnimacion)
                <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="fixed  bg-white inset-0 w-full h-full min-h-screen flex items-center justify-center  z-50"
                    x-init="setTimeout(() => { show = false;  }, 3000)">
                    <div class="  p-8 text-center">
                       
                        <svg class="mx-auto h-26 w-26 text-green-500 animate-bounce" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(96,250,150,1)">
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM17.4571 9.45711L11 15.9142L6.79289 11.7071L8.20711 10.2929L11 13.0858L16.0429 8.04289L17.4571 9.45711Z">
                            </path>
                        </svg>
                        <h2 class="mt-4 text-2xl font-bold text-gray-800">¡Éxito!</h2>
                        <p class="mt-2 text-gray-600">{{$texto}}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>




</div>