<div class="modal modal-account fade" id="modalRegister" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="flat-account">
                <div class="banner-account">
                    <img src="{{ URL::asset('/build/images/banner/banner-account2.jpg') }}" alt="banner">
                </div>
                <form wire:submit.prevent="register" class="form-account">
                    <div class="title-box">
                        <h4>Register</h4>
                        <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="box">
                        <fieldset class="box-fieldset">
                            <label>User name</label>
                            <input type="text" wire:model="username" class="form-control" placeholder="User name">
                            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label>Email address</label>
                            <input type="email" wire:model="email" class="form-control" placeholder="Email address">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label>Password</label>
                            <input type="password" wire:model="password" class="form-control" placeholder="Your password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label>Confirm password</label>
                            <input type="password" wire:model="password_confirmation" class="form-control" placeholder="Confirm password">
                        </fieldset>
                    </div>
                    <div class="box box-btn">
                        <button type="submit" class="tf-btn primary w-100">Sign Up</button>
                        <div class="text text-center">Already have an account? <a href="#modalLogin" data-bs-toggle="modal" class="text-primary">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('open-modal', () => {
        var modal = document.getElementById('modalRegister');
        var bsModal = new bootstrap.Modal(modal);
        bsModal.show();
    });

    window.addEventListener('close-modal', () => {
        var modal = document.getElementById('modalRegister');
        var bsModal = bootstrap.Modal.getInstance(modal);
        bsModal.hide();
    });
</script>
