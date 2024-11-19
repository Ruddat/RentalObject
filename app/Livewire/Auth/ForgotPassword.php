<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use App\Helpers\MailHelper;
use App\Models\User;

class ForgotPassword extends Component
{
    public $email;
    public $token;
    public $isLoading = false;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function sendResetLink()
    {
        $this->isLoading = true;
        try {
            $this->validate();

            $user = User::where('email', $this->email)->first();
            if (!$user) {
                $this->addError('email', 'Email address not found.');
                $this->isLoading = false;
                return;
            }

            $token = Str::random(60);

            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $this->email],
                [
                    'token' => $token,
                    'created_at' => Carbon::now(),
                ]
            );

            //$resetLink = URL::route('reset-password', ['token' => $token, 'email' => $this->email]);
            $resetLink = URL::route('reset-password', ['token' => $token]);

            // Send reset email using MailHelper
            $subject = 'Password Reset Request';
            $body = view('emails.auth.password-reset', ['resetLink' => $resetLink])->render();

            if (!MailHelper::sendEmail($this->email, $subject, $body)) {
                $this->addError('email', 'Failed to send the email. Please try again later.');
                $this->isLoading = false;
                return;
            }

            session()->flash('message', 'Reset link has been sent to your email.');
        } catch (ValidationException $e) {
            session()->flash('error', 'Please provide a valid email address.');
            throw $e;
        } finally {
            $this->isLoading = false;
        }
    }

    public function resendLink()
    {
        $this->sendResetLink();
    }

    public function render()
    {
        return view('livewire.auth.forgot-password', [
            'token' => $this->token,
          //  'email' => $this->email,
        ]);
    }
}
