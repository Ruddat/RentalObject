<?php

namespace App\Models;

use App\Models\ModCustomer;
use App\Models\ModInvoiceItem;
use App\Models\ModInvoiceCreator;
use App\Models\ModInvoiceRecipient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'recipient_id',
        'creator_id',
        'user_id',
        'invoice_date',
        'due_date',
        'total_amount',
        'status',
        'notes',
        'pdf_path',
        
    ];

    public function recipient()
    {
        return $this->belongsTo(ModInvoiceRecipient::class, 'recipient_id');
    }

    public function items()
    {
        return $this->hasMany(ModInvoiceItem::class, 'invoice_id', 'id');
    }

    public function creator()
    {
        return $this->belongsTo(ModInvoiceCreator::class, 'creator_id');
    }
}
