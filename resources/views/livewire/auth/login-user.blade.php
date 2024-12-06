<div class="modal modal-account fade" id="modalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            @if (session('warning'))
            <div class="alert alert-success mt-3">
                {{ session('warning') }}
            </div>
        @endif

            <div class="flat-account">
                <div class="banner-account">
                    <img src="{{ URL::asset('/build/images/banner/banner-account1.jpg') }}" alt="banner">
                </div>
                <form wire:submit.prevent="login" class="form-account" id="loginForm">
                    <div class="title-box">
                        <h4>Login</h4>
                    </div>
                    <div class="box">
                        @if (session()->has('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger mt-3">
        {{ session('error') }}
    </div>
@endif
                        <fieldset class="box-fieldset">
                            <label>Email</label>
                            <div class="ip-field">
                                <input type="email" wire:model="email" class="form-control" placeholder="Your email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label>Password</label>
                            <div class="ip-field">
                                <input type="password" wire:model="password" class="form-control" placeholder="Your password">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check mt-2">
                                <input type="checkbox" wire:model="remember" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="text-forgot text-end"><a href="{{route('forgot-password')}}">@autotranslate("Forgot password", app()->getLocale())</a></div>
                        </fieldset>
                    <div class="box box-btn">
                        <button type="submit" class="tf-btn primary w-100" id="loginButton">
                            <span id="buttonText">Login</span>
                            <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                        <div class="text text-center">Don’t have an account? <a href="#modalRegister" data-bs-toggle="modal" class="text-primary">Register</a></div>
                    </div>
                    <p class="box text-center caption-2">or login with</p>
                    <div class="group-btn">
                        <a href="{{ route('social.login', ['provider' => 'google']) }}" class="btn-social">
                            <img src="{{ URL::asset('/build/images/logo/google.jpg') }}" alt="Google Logo">
                            Google
                        </a>
                        <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="btn-social">
                            <img src="{{ URL::asset('/build/images/logo/fb.jpg') }}" alt="Facebook Logo">
                            Facebook
                        </a>
                        <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="btn-social">
                            <img src="{{ URL::asset('/build/images/logo/git.jpg') }}" alt="Git Hub">
                            Git
                        </a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    // Bootstrap modal handling
    window.addEventListener('open-modal-login', () => {
        var modal = document.getElementById('modalLogin');
        var bsModal = new bootstrap.Modal(modal);
        bsModal.show();
    });

        window.addEventListener('close-modal-login', () => {
            var modal = document.getElementById('modalLogin');
            var bsModal = bootstrap.Modal.getInstance(modal);
            bsModal.hide();
        });

        // Add loading animation to login button
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            var loginButton = document.getElementById('loginButton');
            var buttonText = document.getElementById('buttonText');
            var loadingSpinner = document.getElementById('loadingSpinner');
            // Show loading spinner and disable button
            buttonText.classList.add('d-none');
            loadingSpinner.classList.remove('d-none');
            loginButton.disabled = true;

            // Prevent Bootstrap from automatically hiding the modal

            setTimeout(() => {
                var modal = document.getElementById('modalLogin');
                var bsModal = bootstrap.Modal.getInstance(modal);
                if (bsModal) {
                    bsModal.show();
                }
            }, 300);
        });

    </script>
</div>
