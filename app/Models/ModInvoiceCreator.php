<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModInvoiceCreator extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     */
    protected $table = 'mod_invoice_creators';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'country',
        'tax_number',
        'bank_name',
        'bank_account',
        'iban',
        'bic',
        'paypal_account',
        'accept_bank_transfer',
        'accept_paypal',
        'website',
        'logo_path',
        'notes',
        'user_id',
        
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'accept_bank_transfer' => 'boolean',
        'accept_paypal' => 'boolean',
    ];

    /**
     * Get the full name of the invoice creator.
     */
    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    /**
     * Scope a query to only include active invoice creators.
     */
    public function scopeActive($query)
    {
        return $query->where('accept_bank_transfer', true)->orWhere('accept_paypal', true);
    }
}
