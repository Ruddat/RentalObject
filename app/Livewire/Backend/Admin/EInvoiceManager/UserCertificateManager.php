<?php

namespace App\Livewire\Backend\Admin\EInvoiceManager;

use Livewire\Component;
use App\Models\ModUserCertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserCertificateManager extends Component
{
    public $certificate; // Zertifikat (.pem-Inhalt)
    public $privateKey;  // Privater Schlüssel (.key-Inhalt)
    public $keyPassword; // Optionales Passwort

    public function saveCertificate()
    {
        $this->validate([
            'certificate' => 'required|string',
            'privateKey' => 'required|string',
            'keyPassword' => 'nullable|string',
        ]);

        $userCertificate = ModUserCertificate::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'certificate' => Crypt::encryptString($this->certificate),
                'private_key' => Crypt::encryptString($this->privateKey),
                'key_password' => $this->keyPassword ? Crypt::encryptString($this->keyPassword) : null,
            ]
        );

        session()->flash('message', 'Zertifikat erfolgreich gespeichert!');
    }

    public function render()
    {
        return view('livewire.backend.admin.e-invoice-manager.user-certificate-manager');
    }
}
