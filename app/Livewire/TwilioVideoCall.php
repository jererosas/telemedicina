<?php

namespace App\Livewire;

use Livewire\Component;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class TwilioVideoCall extends Component
{


    public $roomName;
    public $identity;
    public $roomCreated = false;
    public $roomJoined = false;
    public $accessToken;
    public $participants = [];




    public function mount()
    {
        $this->identity = 'user_' . uniqid();
    }

    public function createRoom()
    {
    
        $this->dispatch('test');
    }

    public function joinRoom()
    {
        $this->validate(['roomName' => 'required|min:3']);
        
        $this->accessToken = $this->generateToken();
        $this->roomJoined = true;
        
        $this->dispatch('room-joined', [
            'roomName' => $this->roomName,
            'token' => $this->accessToken,
            'identity' => $this->identity
        ]);
    }

    public function leaveRoom()
    {
        $this->dispatch('leave-room');
        $this->resetRoom();
    }

    protected function generateToken()
    {
        $accountSid = config('services.twilio.account_sid');
        $apiKey = config('services.twilio.api_key');
        $apiSecret = config('services.twilio.api_secret');
        
        $token = new AccessToken(
            $accountSid,
            $apiKey,
            $apiSecret,
            3600,
            $this->identity
        );

        $videoGrant = new VideoGrant();
        $videoGrant->setRoom($this->roomName);
        $token->addGrant($videoGrant);

        return $token->toJWT();
    }

    protected function resetRoom()
    {
        $this->roomCreated = false;
        $this->roomJoined = false;
        $this->roomName = '';
        $this->participants = [];
    }

    public function addParticipant($identity)
    {
        if (!in_array($identity, $this->participants)) {
            $this->participants[] = $identity;
            $this->emitSelf('refreshParticipants');
        }
    }

    public function removeParticipant($identity)
    {
        $this->participants = array_filter($this->participants, fn($p) => $p !== $identity);
        $this->emitSelf('refreshParticipants');
    }

    public function render()
    {
        return view('livewire.twilio-video-call');
    }

}
