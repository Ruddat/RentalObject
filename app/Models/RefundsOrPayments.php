<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefundsOrPayments extends Model
{
    protected $fillable = [
        'user_id',
        'tenant_id',
        'rental_object_id',
        'year',
        'month',
        'type',
        'amount',
        'payment_date',
        'note',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function rentalObject()
    {
        return $this->belongsTo(RentalObject::class);
    }
}
