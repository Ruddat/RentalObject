<div>


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
                        <!-- Normaler Button-Text -->
                        <button type="submit" class="tf-btn primary w-100" wire:loading.attr="disabled">
                            <span wire:loading.remove>Sign Up</span>
                            <span wire:loading>
                                <div class="spinner-border spinner-border-sm" role="status"></div> Registrieren...
                            </span>
                        </button>
                        <div class="text text-center">Already have an account? <a href="#modalLogin" data-bs-toggle="modal" class="text-primary">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .spinner-border {
        width: 1rem;
        height: 1rem;
        margin-right: 5px;
    }
</style>
<script>
    window.addEventListener('open-modal-register', () => {
        var modal = document.getElementById('modalRegister');
        var bsModal = new bootstrap.Modal(modal);
        bsModal.show();
    });

    window.addEventListener('close-modal-register', () => {
        var modal = document.getElementById('modalRegister');
        var bsModal = bootstrap.Modal.getInstance(modal);
        bsModal.hide();
        removeModalBackdrop(); // Backdrop nach dem Schließen entfernen
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('registerSuccess', () => {
        Swal.fire({
            title: 'Erfolgreiche Registrierung!',
            text: 'Eine Bestätigungs-E-Mail wurde an Ihre Adresse gesendet. Bitte überprüfen Sie Ihr Postfach.',
            icon: 'success',
            confirmButtonText: 'Okay'
        }).then((result) => {
            if (result.isConfirmed) {
                // Modal schließen
                var modal = document.getElementById('modalRegister');
                var bsModal = bootstrap.Modal.getInstance(modal);
                bsModal.hide();
                removeModalBackdrop(); // Backdrop nach dem Schließen entfernen
            }
        });
    });

    window.addEventListener('registerError', event => {
        Swal.fire({
            title: 'Fehler!',
            text: event.detail.errorMessage,
            icon: 'error',
            confirmButtonText: 'Erneut versuchen'
        });
    });

    // Funktion zum Entfernen des Bootstrap-Modal-Backdrops
    function removeModalBackdrop() {
        // Entfernt alle Backdrops, die eventuell noch sichtbar sind
        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.parentNode.removeChild(backdrop);
        });
    }
</script>




</div>
