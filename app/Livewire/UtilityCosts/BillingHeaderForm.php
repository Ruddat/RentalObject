<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\BillingHeader;
use Livewire\WithFileUploads;

class BillingHeaderForm extends Component
{
    use WithFileUploads;

    public $showForm = false; // Neues Feld für die Steuerung des Formulars
    public $creator_name, $first_name, $street, $house_number, $zip_code, $city;
    public $bank_name, $iban, $bic, $footer_text, $notes, $logo, $billingHeaders, $logoPreview;
    public $phone, $email;

    public function mount()
    {
        $this->billingHeaders = BillingHeader::all();
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm; // Schaltet die Formularanzeige ein/aus
    }


    public function updatedLogo()
    {
        $this->validate([
            'logo' => 'image|max:1024',
        ]);
        $this->logoPreview = $this->logo->temporaryUrl();
    }

    public function saveHeader()
    {
        $data = $this->validate([
            'creator_name' => 'required|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:10',
            'zip_code' => 'nullable|string|max:10',
            'city' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'bank_name' => 'nullable|string|max:255',
            'iban' => 'nullable|string|max:34',
            'bic' => 'nullable|string|max:11',
            'footer_text' => 'nullable|string',
            'notes' => 'nullable|string',
            'logo' => 'nullable|image|max:1024',
        ]);

        if ($this->logo) {
            $data['logo_path'] = $this->logo->store('logos', 'public');
        }

        BillingHeader::create($data);

        $this->reset(['creator_name', 'first_name', 'street', 'house_number', 'zip_code', 'city', 'phone', 'email', 'bank_name', 'iban', 'bic', 'footer_text', 'notes', 'logo']);
        $this->billingHeaders = BillingHeader::all();
        session()->flash('message', 'Abrechnungskopf erfolgreich gespeichert.');
    }

    public function deleteHeader($id)
    {
        BillingHeader::findOrFail($id)->delete();
        $this->billingHeaders = BillingHeader::all();
        session()->flash('message', 'Abrechnungskopf erfolgreich gelöscht.');
    }

    public function render()
    {
        return view('livewire.utility-costs.billing-header-form');
    }
}
