<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Helpers\MailHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUser extends Component
{
    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
    }


    // Registriere die Listener für bestimmte Events
    protected $listeners = [
        'registerSuccess' => 'handleRegisterSuccess',
        'registerError' => 'handleRegisterError',
        'open-modal' => 'openModal',
        'close-modal' => 'closeModal',
    ];


    public function register()
    {
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Modal geöffnet lassen, Validierungsfehler dem Benutzer anzeigen
            $this->dispatch('open-modal-register');
            throw $e;
        }

        // Benutzer erstellen
        $user = User::create([
            'name' => $this->username,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);



        // Verifizierungstoken und Ablaufdatum generieren
        $verificationToken = sha1(time() . $user->email); // Token basierend auf E-Mail und Zeitstempel
        $verificationExpiresAt = now()->addMinutes(60); // Link 60 Minuten gültig

        // Token und Ablaufdatum speichern
        $user->verification_token = $verificationToken;
        $user->verification_expires_at = $verificationExpiresAt;
        $user->save();

        // Benutzerrolle zuweisen (z.B. "user")
        $user->assignRole('newuser');

        // Benutzer anmelden
        Auth::login($user);


        // Link für die E-Mail-Verifizierung
        $verificationLink = route('email.verification.custom', ['id' => $user->id, 'token' => $verificationToken]);

        
        // Ablaufzeit in Stunden (z.B. 1 Stunde)
        $expiresIn = $verificationExpiresAt->diffForHumans(now(), true); //'60 Minuten'; // oder: $verificationExpiresAt->diffForHumans(now(), true);

        // E-Mail-Inhalt basierend auf der Blade-Vorlage erstellen
        $body = view('emails.auth.registration_confirmation', [
            'username' => $user->username,
            'verificationLink' => $verificationLink,
            'expiresIn' => $expiresIn,
        ])->render();

        $subject = 'Bestätigung deiner Registrierung';

        if (MailHelper::sendEmail($user->email, $subject, $body, $user->username)) {
            // Erfolg: SweetAlert anzeigen und zur Dashboard-Seite weiterleiten
           // $this->dispatch('registerSuccess', ['redirectUrl' => route('dashboard')]);
          //  $this->dispatch('close-modal-register');

            // Erfolg: SweetAlert anzeigen
             $this->dispatch('registerSuccess'); // Dispatch ein Event für JavaScript

        } else {
            // Fehler: SweetAlert-Fehlermeldung anzeigen
            $this->dispatch('registerError', ['errorMessage' => 'Registration successful, but the confirmation email could not be sent.']);
        }

        // Modal schließen
        $this->dispatch('close-modal-register');
    }


    public function render()
    {
        return view('livewire.auth.register-user');
    }
}
