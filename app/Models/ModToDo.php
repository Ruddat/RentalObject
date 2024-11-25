<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModToDo extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function project()
    {
        return $this->belongsTo(ModProject::class, 'project_id');
    }

    public function worker()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

}
