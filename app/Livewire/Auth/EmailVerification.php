<?php

namespace App\Livewire\Auth;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\UtilityCost;
use App\Events\UserVerified;
use Database\Seeders\UtilityCostsSeeder;

class EmailVerification extends Component
{
    public $userId;
    public $hash;

    public function mount($id, $hash)
    {
        $this->userId = $id;
        $this->hash = $hash;

        $this->verifyEmail();
    }

    public function verifyEmail()
    {
        $user = User::findOrFail($this->userId);
dd($user);

        // Überprüfe, ob das Token übereinstimmt und ob es noch gültig ist
        if (sha1($user->email) !== $this->hash || Carbon::now()->greaterThan($user->verification_expires_at)) {
            session()->flash('error', 'Der Verifizierungslink ist ungültig oder abgelaufen.');
            return;
        }

        // Benutzer als verifiziert markieren
        $user->email_verified_at = now();
        $user->verification_token = null; // Token entfernen
        $user->verification_expires_at = null; // Ablaufdatum entfernen
        $user->save();

        // Standard-Nebenkosten für den Benutzer hinzufügen
        $this->createDefaultUtilityCosts($user->id);

        session()->flash('message', 'E-Mail erfolgreich bestätigt.');
    }

    private function createDefaultUtilityCosts(int $userId)
    {
        $utilityCosts = [
            [
                'user_id' => $userId,
                'name' => 'Grundsteuer',
                'short_name' => 'GST',
                'category' => 'Betriebskosten',
                'description' => 'Kosten der wiederkehrenden öffentlichen Lasten eines Grundstücks, die je nach Gemeinde variieren können.',
                'amount' => 0,
                'distribution_key' => 'units'
            ],
            // Weitere Einträge ...
        ];

        foreach ($utilityCosts as $cost) {
            UtilityCost::create($cost);
        }
    }

    public function render()
    {
        return view('livewire.auth.email-verification');
    }
}
