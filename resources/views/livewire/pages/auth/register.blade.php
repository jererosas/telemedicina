<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('inicio', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <div class="mb-4 flex justify-center">
            <a href="{{url('index')}}">
                <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo"
                    class="desktop-logo">
                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo"
                    class="desktop-white">
            </a>
        </div>
        <p class="h5 mb-2 text-center">Registro</p>
        <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">¡Bienvenido! Empieza creando tu cuenta.</p>
       
        <div class="grid grid-cols-12 gap-y-4">
            <div class="xl:col-span-12 col-span-12">
                <label for="signup-firstname" class="form-label text-defaulttextcolor">Nombre y Apellido<sup
                        class="text-xs text-danger">*</sup></label>
                <input type="text" wire:model="name" class="form-control" id="signup-firstname" required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="xl:col-span-12 col-span-12">
                <label for="signup-firstname" class="form-label text-defaulttextcolor">Email<sup
                        class="text-xs text-danger">*</sup></label>
                <input type="email" wire:model="email" class="form-control" id="signup-firstname" required>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="xl:col-span-12 col-span-12">
                <label for="signup-password" class="form-label text-defaulttextcolor">Contraseña<sup
                        class="text-xs text-danger">*</sup></label>
                <div class="relative">
                    <input type="password" wire:model="password"  class="form-control create-password-input" id="signup-password"
                      required>
                      
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50"
                        onclick="createpassword('signup-password',this)" id="button-addon2"><i
                            class="ri-eye-off-line align-middle"></i></a>
                </div>
            </div>
            <div class="xl:col-span-12 col-span-12">
                <label for="signup-confirmpassword" class="form-label text-defaulttextcolor">Confirmar Contraseña<sup
                        class="text-xs text-danger">*</sup></label>
                <div class="relative">
                    <input type="password" wire:model="password_confirmation" class="form-control create-password-input" id="signup-confirmpassword"
                       required>
                       <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50"
                        onclick="createpassword('signup-confirmpassword',this)" id="button-addon21"><i
                            class="ri-eye-off-line align-middle"></i></a>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label text-textmuted dark:text-textmuted/50 font-normal text-[14px]"
                        for="defaultCheck1">
                    </label>
                    Al crear una cuenta, usted acepta nuestros términos y condiciones.
                    <a href="{{url('terms-conditions')}}" class="text-success"><u>Términos y Condiciones</u></a> y <a
                        class="text-success"><u>Política de Privacidad</u></a>
                </div>
            </div>
        </div>
        <div class="grid mt-4">
          <button class="ti-btn ti-btn-primary" type="submit">Registrarme</button>
        </div>
        <div class="text-center">
            <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">¿Ya tienes una cuenta? <a wire:navigate
                    href="/login" class="text-primary">Ingresar</a></p>
        </div>
        

    </form>
</div>