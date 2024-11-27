<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('room.{roomId}', function ($user, $roomId) {
    return \DB::table('mod_room_users')
        ->where('user_id', $user->id)
        ->where('room_id', $roomId)
        ->exists();
});
