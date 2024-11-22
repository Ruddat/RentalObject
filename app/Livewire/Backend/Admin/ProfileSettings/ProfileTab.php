<?php

namespace App\Livewire\Backend\Admin\ProfileSettings;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;

class ProfileTab extends Component
{
    use WithFileUploads;

    public $user = [];
    public $profilePicture;
    public $previewUrl;
    public $availableLanguages = [];

    public function mount()
    {
        // Lade die Benutzerdaten in ein sicheres Array
        $authUser = Auth::user();

        $this->user = [
            'first_name' => $authUser->first_name ?? '',
            'last_name' => $authUser->last_name ?? '',
            'email' => $authUser->email ?? '',
            'address' => $authUser->address ?? '',
            'address_2' => $authUser->address_2 ?? '',
            'street' => $authUser->street ?? '',
            'number' => $authUser->number ?? '',
            'city' => $authUser->city ?? '',
            'state' => $authUser->state ?? '',
            'zip' => $authUser->zip ?? '',
            'language' => $authUser->language ?? cookie('locale', app()->getLocale()),
            'profile_picture' => $authUser->profile_picture ?? null,
        ];

        // Lade verfügbare Sprachen
        $this->availableLanguages = Config::get('app.available_locales');

        // Setze die Profilbild-Vorschau
        $this->previewUrl = $this->user['profile_picture']
            ? asset('storage/' . $this->user['profile_picture'])
            : asset('default-profile.png');
    }

    public function updatedProfilePicture()
    {
        $this->validate([
            'profilePicture' => 'image|max:2048', // Max. 2 MB
        ]);

        $this->previewUrl = $this->profilePicture->temporaryUrl();
    }

    public function setLanguage($locale)
    {
        if (array_key_exists($locale, $this->availableLanguages)) {
            App::setLocale($locale);
            $this->user['language'] = $locale;
            cookie()->queue('locale', $locale, 60 * 24 * 365);

            session()->flash('success', 'Language updated successfully!');
        } else {
            session()->flash('error', 'Invalid language selected.');
        }
    }

    public function save()
    {
        // Validiere Benutzerdaten
        $validatedData = $this->validate([
            'user.first_name' => 'nullable|string|max:255',
            'user.last_name' => 'nullable|string|max:255',
            'user.address' => 'nullable|string|max:255',
            'user.address_2' => 'nullable|string|max:255',
            'user.street' => 'nullable|string|max:255',
            'user.number' => 'nullable|string|max:255',
            'user.city' => 'nullable|string|max:255',
            'user.state' => 'nullable|string|max:255',
            'user.zip' => 'nullable|string|max:10',
            'user.language' => 'required|string|max:5|in:' . implode(',', array_keys($this->availableLanguages)),
        ]);

        if ($this->profilePicture) {
            $validatedData['user']['profile_picture'] = $this->profilePicture->store('profile_pictures', 'public');
        }

        // Benutzerdaten aktualisieren
        Auth::user()->update($validatedData['user']);

        session()->flash('success', 'Profile updated successfully!');
        $this->dispatch('flashMessage');
    }

    public function render()
    {
        return view('livewire.backend.admin.profile-settings.profile-tab');
    }
}
