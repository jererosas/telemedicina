<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\VideoRoom;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class VideoRoomController extends Controller
{
    public function createRoom(Request $request)
    {
        $roomName = 'room_' . uniqid();
        $twilio = new Client(env('TWILIO_API_KEY'), env('TWILIO_API_SECRET'));

        $room = $twilio->video->v1->rooms->create([
            'uniqueName' => $roomName,
            'type' => 'peer-to-peer',
        ]);

        $videoRoom = Room::create([
            'name' => $roomName,
            'sid' => $room->sid,
            'status' => 'open',
        ]);

        return response()->json(['name' => $videoRoom->name, 'sid' => $videoRoom->sid]);
    }
}