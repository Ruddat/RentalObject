<?php

namespace App\Models;

use App\Models\ModInvoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
    ];

    public function invoices()
    {
        return $this->hasMany(ModInvoice::class);
    }
}
