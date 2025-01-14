<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'date',
        'description',
        'pdf_path',
        'sender',
        'receiver',
        'tax_percent',
        'tax_amount',
        'number',
        'type',
        'hash',
        'amount_in_words',
    ];
}
