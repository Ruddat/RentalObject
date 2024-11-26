<?php

namespace App\Http\Controllers\Backend\Admin\VideoChatSystem;

use App\Models\ModVideoRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoChatController extends Controller
{
    public function openRoom($roomName)
    {
        // Suche den Raum oder erzeuge ihn, falls er nicht existiert
        $room = ModVideoRoom::firstOrCreate(['name' => $roomName]);

        // Weiterleitung zur Chat-Ansicht
        return view('backend.admin.chat.video-chat', compact('room'));
    }

    public function createRoom(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:mod_video_rooms|max:255',
        ]);

        $room = ModVideoRoom::create(['name' => $request->name]);

        return redirect()->route('video.room', ['roomName' => $room->name]);
    }
}
