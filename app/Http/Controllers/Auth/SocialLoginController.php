<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->stateless()->user();
        $user = User::where('email', $socialUser->getEmail())->first();

        if ($user) {
            // Benutzer existiert bereits, einloggen
            Auth::login($user);
        } else {
            // Benutzer existiert noch nicht, registrieren und einloggen
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'password' => bcrypt(Str::random(16)), // zufälliges Passwort, da Nutzer sich über Provider anmeldet
            ]);
            Auth::login($user);
        }

        return redirect()->route('home');
    }
}
