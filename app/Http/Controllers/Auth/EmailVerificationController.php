<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UtilityCost;
use App\Events\UserVerified;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Database\Seeders\UtilityCostsUserSeeder;

class EmailVerificationController extends Controller
{
    /**
     * Handle the email verification.
     */
    public function verify(Request $request, $id, $token)
    {
        $user = User::findOrFail($id);

        // Überprüfe, ob das Token übereinstimmt und ob es noch gültig ist
        if ($user->verification_token !== $token || Carbon::now()->greaterThan($user->verification_expires_at)) {
            Session::flash('error', 'Der Verifizierungslink ist ungültig oder abgelaufen.');
            return view('auth.email-verification');
        }

        // Benutzer als verifiziert markieren
        $user->email_verified_at = now();
        $user->verification_token = null; // Token entfernen
        $user->verification_expires_at = null; // Ablaufdatum entfernen
        $user->save();

        // Benutzerdefinierten Seeder ausführen, um die Standard-Nebenkosten hinzuzufügen
        $seeder = new UtilityCostsUserSeeder();
        $seeder->runForUser($user->id);



        // Alle bestehenden Rollen entfernen, bevor eine neue Rolle zugewiesen wird
        $user->syncRoles([]);

        // Benutzerrolle zuweisen (z.B. "seller")
        $user->assignRole('seller');

        // Rolle prüfen
        //dd($user->getRoleNames()); // Sollte nun nur "seller" zurückgeben

        Session::flash('message', 'E-Mail erfolgreich bestätigt.');
        return redirect()->route('home');
    }

    /**
     * Erstelle die Standard-Nebenkosten für den Benutzer.
     */
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
}
