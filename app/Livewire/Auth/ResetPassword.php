<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class ResetPassword extends Component
{
    public $token;
    public $email;
    public $password;
    public $password_confirmation;
    public $showPassword = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function mount($token)
    {
        $reset = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->first();

        if (!$reset || Carbon::parse($reset->created_at)->addMinutes(60)->isPast()) {
            session()->flash('error', 'This password reset token is invalid or has expired.');
            return redirect()->route('forgot-password');
        }
        $this->email = $reset->email;
        $this->token = $token;

    }

    public function resetPassword()
    {
        $this->validate();

        $reset = DB::table('password_reset_tokens')
            ->where('token', $this->token)
            ->first();

        if (!$reset || Carbon::parse($reset->created_at)->addMinutes(60)->isPast()) {
            throw ValidationException::withMessages([
                'token' => ['This password reset token is invalid or has expired.'],
            ]);
        }

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['We cannot find a user with that email address.'],
            ]);
        }

        $user->password = Hash::make($this->password);
        $user->setRememberToken(Str::random(60));
        $user->save();

        DB::table('password_reset_tokens')->where('email', $this->email)->delete();

        session()->flash('message', 'Your password has been reset successfully. You can now log in.');
        return redirect()->to('/')->with(['openLoginModal' => true]);
    }

    public function toggleShowPassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function render()
    {
        return view('livewire.auth.reset-password', [
            'token' => $this->token,
        ]);
    }
}
