<div class="modal modal-account fade" id="modalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="flat-account">
                <div class="banner-account">
                    <img src="{{ URL::asset('/build/images/banner/banner-account1.jpg') }}" alt="banner">
                </div>
                <form wire:submit.prevent="login" class="form-account">
                    <div class="title-box">
                        <h4>Login</h4>
                        <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="box">
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
                            <div class="text-forgot text-end"><a href="#">Forgot password</a></div>
                        </fieldset>
                    </div>
                    <div class="box box-btn">
                        <button type="submit" class="tf-btn primary w-100">Login</button>
                        <div class="text text-center">Don’t have an account? <a href="#modalRegister" data-bs-toggle="modal" class="text-primary">Register</a></div>
                    </div>
                    <p class="box text-center caption-2">or login with</p>
                    <div class="group-btn">
                        <a href="#" class="btn-social">
                            <img src="{{ URL::asset('/build/images/logo/google.jpg') }}" alt="img">
                            Google
                        </a>
                        <a href="#" class="btn-social">
                            <img src="{{ URL::asset('/build/images/logo/fb.jpg') }}" alt="img">
                            Facebook
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
