<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModUserCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'certificate',
        'private_key',
        'key_password',
    ];
}
