<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataQuittungText extends Model
{
    protected $table = 'data_quittung_texts';
    protected $fillable = ['user_id', 'text', 'created_at', 'updated_at'];

}
