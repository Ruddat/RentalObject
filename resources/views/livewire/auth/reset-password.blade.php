<div class="form-container">
    <form wire:submit.prevent="resetPassword" class="app-form">
        <div class="row">
            <div class="col-12">
                <div class="mb-5 text-center text-lg-start">
                    <h2 class="text-primary f-w-600">Reset Your Password</h2>
                    <p>Create a new password and sign in to admin</p>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <div class="input-group">
                        <input type="{{ $showPassword ? 'text' : 'password' }}" id="password" class="form-control" wire:model="password" placeholder="Enter Your Password">
                        <button type="button" class="btn btn-outline-secondary" wire:click="toggleShowPassword">
                            {{ $showPassword ? 'Hide' : 'Show' }}
                        </button>
                    </div>
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="{{ $showPassword ? 'text' : 'password' }}" id="password_confirmation" class="form-control" wire:model="password_confirmation" placeholder="Enter Your Password" required>
                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                </div>
            </div>
        </div>
    </form>
    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
