<?php

namespace App\Models;

use App\Models\ModCustomer;
use App\Models\ModInvoiceItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'customer_id',
        'user_id',
        'invoice_date',
        'due_date',
        'total_amount',
        'status',
        'notes',
        'pdf_path',
    ];

    public function customer()
    {
        return $this->belongsTo(ModCustomer::class);
    }

    public function items()
    {
        return $this->hasMany(ModInvoiceItem::class, 'invoice_id', 'id');
    }
}
