<?php

namespace App\Models;

use App\Models\Tenant;
use App\Models\RentalObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TenantPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'rental_object_id',
        'year',
        'month',
        'amount',
    ];

    // Beziehung zu Tenant
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // Beziehung zu RentalObject
    public function rentalObject()
    {
        return $this->belongsTo(RentalObject::class);
    }
}
