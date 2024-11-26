<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModVideoRoom extends Model
{
    protected $fillable = ['name'];

    public function messages()
    {
        return $this->hasMany(ModChatMessage::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'mod_room_users', 'room_id', 'user_id');
    }
}
