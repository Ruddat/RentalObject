<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\BillingHeader;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BillingHeaderForm extends Component
{
    use WithFileUploads;

    public $showForm = false;
    public $creator_name, $first_name, $street, $house_number, $zip_code, $city;
    public $bank_name, $iban, $bic, $footer_text, $notes, $logo, $billingHeaders, $logoPreview;
    public $phone, $email;

    public function mount()
    {
        $this->billingHeaders = BillingHeader::where('user_id', Auth::id())->get();
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
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

        // User-ID hinzufügen
        $data['user_id'] = Auth::id();

        // Verzeichnis erstellen, falls nicht vorhanden, und Logo speichern
        if ($this->logo) {
            $userId = Auth::id();
            $directory = "logos/$userId";
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory);
            }
            $data['logo_path'] = $this->logo->store($directory, 'public');
        }

        BillingHeader::create($data);

        $this->reset(['creator_name', 'first_name', 'street', 'house_number', 'zip_code', 'city', 'phone', 'email', 'bank_name', 'iban', 'bic', 'footer_text', 'notes', 'logo']);
        $this->billingHeaders = BillingHeader::where('user_id', Auth::id())->get();
        session()->flash('message', 'Abrechnungskopf erfolgreich gespeichert.');
    }

    public function deleteHeader($id)
    {
        $header = BillingHeader::findOrFail($id);
        if ($header->logo_path && Storage::disk('public')->exists($header->logo_path)) {
            Storage::disk('public')->delete($header->logo_path);
        }
        $header->delete();

        $this->billingHeaders = BillingHeader::where('user_id', Auth::id())->get();
        session()->flash('message', 'Abrechnungskopf erfolgreich gelöscht.');
    }

    public function render()
    {
        return view('livewire.utility-costs.billing-header-form');
    }
}
