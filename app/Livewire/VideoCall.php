<?php

namespace App\Livewire;


use Livewire\Component;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class VideoCall extends Component
{
    public $roomName;
    public $token;

    public function mount($roomName)
    {
        $this->roomName = $roomName;
        $this->token = $this->generateToken($roomName, auth()->user()->name); // Autogenera el token
    }

    public function render()
    {
        return view('livewire.video-call', [
            'roomName' => $this->roomName,
            'token' => $this->token,
        ]);
    }

    private function generateToken($roomName, $identity)
    {
        // Credenciales de Twilio desde el archivo .env
        $accountSid = env('TWILIO_ACCOUNT_SID');
        $apiKey = env('TWILIO_API_KEY_SID');
        $apiSecret = env('TWILIO_API_SECRET');

        // Crear el token de acceso
        $token = new AccessToken(
            $accountSid,
            $apiKey,
            $apiSecret,
            3600, // Duración del token en segundos
            $identity
        );

        // Conceder acceso al servicio de Video y a la sala específica
        $videoGrant = new VideoGrant();
        $videoGrant->setRoom($roomName);
        $token->addGrant($videoGrant);

        return $token->toJWT();
    }
}
