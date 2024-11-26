<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModChatMessage extends Model
{
    protected $fillable = ['room_id', 'user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
