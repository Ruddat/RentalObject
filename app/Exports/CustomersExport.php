<?php

namespace App\Exports;

use App\Models\ModCustomer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection, WithHeadings
{
    public function __construct($search = '', $filterActive = true)
    {
        $this->search = $search;
        $this->filterActive = $filterActive;
    }

    public function collection()
    {
        $query = ModCustomer::query();

        if ($this->filterActive) {
            $query->where('is_active', true);
        }

        if ($this->search) {
            $query->where(function ($subQuery) {
                $subQuery->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            });
        }

        return $query->select([
            'name',
            'email',
            'phone',
            'address',
            'city',
            'postal_code',
            'country',
            'customer_type',
            'company_name',
            'vat_number',
            'payment_terms',
            'is_active',
            'created_at',
        ])->get();
    }

    /**
     * Überschriften hinzufügen
     */
    public function headings(): array
    {
        return [
            'Name',
            'E-Mail',
            'Telefon',
            'Adresse',
            'Stadt',
            'Postleitzahl',
            'Land',
            'Kundentyp',
            'Firmenname',
            'Umsatzsteuernummer',
            'Zahlungsbedingungen',
            'Aktiv',
            'Erstellt am',
        ];
    }
}
