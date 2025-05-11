<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        if (Auth::user()->admin == '1') {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        }
        elseif (Auth::user()->admin == NULL) {
            $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    
        }
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->

        <div class="mb-3 flex justify-center">
            <a href="{{url('index')}}">
                <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo"
                    class="desktop-logo">
                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo"
                    class="desktop-white">
            </a>
        </div>
        <p class="h5 mb-2 text-center">Iniciar sesión</p>


        <div class="grid grid-cols-12 gap-y-3">
            <div class="xl:col-span-12 col-span-12">
                <label for="signin-username" class="form-label text-defaulttextcolor">Email ó DNI<sup
                        class="text-xs text-danger">*</sup></label>
                <input type="text"  wire:model="form.reconocer" id="reconocer"  class="form-control" id="signin-username">
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                <x-input-error :messages="$errors->get('form.dni')" class="mt-2" />
            </div>
            <div class="xl:col-span-12 col-span-12 mb-2">
                <label for="signin-password" class="form-label text-defaulttextcolor block">Contraseña<sup
                        class="text-xs text-danger">*</sup><a href="{{url('reset-password-basic')}}"
                        class="float-end font-normal text-textmuted dark:text-textmuted/50">¿Olvidaste tu
                        contraseña?</a></label>
                <div class="relative">
                    <input wire:model="form.password" id="password" type="password" name="password"
                        class="form-control create-password-input" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    <a href="javascript:void(0);" class="show-password-button text-textmuted dark:text-textmuted/50"
                        onclick="createpassword('signin-password',this)" id="button-addon2"><i
                            class="ri-eye-off-line align-middle"></i></a>
                </div>

            </div>
        </div>
        <div class="grid mt-4">
      <button  class="ti-btn ti-btn-primary" type="submit"> Ingresar</button>
        </div>
        <div class="text-center">
            <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">¿Todavía no tenés una cuenta?<a wire:navigate
                    href="/register" class="text-primary">¡Registrate ahora!</a></p>
        </div>

    </form>
</div>