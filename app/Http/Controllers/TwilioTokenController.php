<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class TwilioTokenController extends Controller
{
    public function generateToken(Request $request)
    {
        $roomName = $request->input('room_name');
        $identity = $request->user()->name; // Puedes usar cualquier identificador único para el usuario

        // Claves de Twilio desde .env
        $accountSid = env('TWILIO_ACCOUNT_SID');
        $apiKey = env('TWILIO_API_KEY');
        $apiSecret = env('TWILIO_API_SECRET');

        // Crear token de acceso
        $token = new AccessToken(
            $accountSid,
            $apiKey,
            $apiSecret,
            3600, // Token válido por 1 hora
            $identity
        );

        // Conceder acceso a la sala de video
        $videoGrant = new VideoGrant();
        $videoGrant->setRoom($roomName);
        $token->addGrant($videoGrant);

        return response()->json([
            'token' => $token->toJWT(),
            'identity' => $identity,
            'room_name' => $roomName,
        ]);
    }
}