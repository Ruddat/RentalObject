<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModProject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function todos()
    {
        return $this->hasMany(ModToDo::class, 'project_id');
    }

    public function tasks()
    {
        return $this->hasMany(ModToDo::class, 'project_id');
    }

}
