<!-- Reset Your Password start -->
<div class="container">
    <div class="row sign-in-content-bg">
        <div class="col-lg-6 image-contentbox d-none d-lg-block">
            <div class="form-container">
                <div class="signup-content mt-4">
                    <span>
                        <img src="{{asset('backend/assets/images/logo/1.png')}}" alt="" class="img-fluid ">
                    </span>
                </div>

                <div class="signup-bg-img">
                    <img src="{{asset('backend/assets/images/login/03.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-lg-6 form-contentbox">
            <div class="form-container">
                <form class="app-form" wire:submit.prevent="sendResetLink">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5 text-center text-lg-start">
                                <h2 class="text-primary f-w-600">@autotranslate("Forgot Your Password", app()->getLocale())</h2>
                                <p>@autotranslate("Create a new password and sign in to your account", app()->getLocale())</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100" wire:loading.attr="disabled">
                                    <span wire:loading.remove>Send Reset Password Link</span>
                                    <span wire:loading>Sending...</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 text-center">
                                <a href="#" wire:click.prevent="resendLink" class="text-primary">Resend Reset Link</a>
                            </div>
                        </div>
                    </div>
                </form>
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
            </div>
        </div>
    </div>
</div>
<!-- Reset Your Password end -->
