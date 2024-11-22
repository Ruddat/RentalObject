<?php

namespace App\Models;

use App\Models\ModInvoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModInvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'item_number',
        'description',
        'quantity',
        'unit_price',
        'tax_rate',
        'total_price',
    ];

    public function invoice()
    {
        return $this->belongsTo(ModInvoice::class);
    }

    public function calculateTotalPrice()
    {
        $subtotal = $this->quantity * $this->unit_price;
        $tax = $subtotal * ($this->tax_rate / 100);
        return $subtotal + $tax;
    }
}
