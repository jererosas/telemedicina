<?php

namespace App\Livewire\Forms;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
 

    public string $reconocer = '';
    public string $email = '';
    public string $dni = '';
    #[Validate('required|string')]
    public string $password = '';

    #[Validate('boolean')]
    public bool $remember = false;



    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (strpos($this->reconocer, '@') !== false) {
     
            if (! Auth::attempt($this->only(['email', 'password']), $this->remember)) {
                RateLimiter::hit($this->throttleKey());
    
                throw ValidationException::withMessages([
                    'form.email' => 'Estas credenciales no coinciden con nuestros registros',
                ]);
            }



        } else {
           
            if (! Auth::attempt($this->only(['dni', 'password']), $this->remember)) {
                RateLimiter::hit($this->throttleKey());
    
                throw ValidationException::withMessages([
                    'form.dni' => 'Estas credenciales no coinciden con nuestros registros',
                ]);
            }


            
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'form.dni' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {


        if (strpos($this->reconocer, '@') !== false) {
            $reconocido = true;


            $this->email = $this->reconocer;

            return Str::transliterate(Str::lower( $this->email ).'|'.request()->ip());

         } else {
             $reconocido = false;

             $this->dni = $this->reconocer;
             return Str::transliterate(Str::lower( $this->dni ).'|'.request()->ip());
         }
 
 



    }
}