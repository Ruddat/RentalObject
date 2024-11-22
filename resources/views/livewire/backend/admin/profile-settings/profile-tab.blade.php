<div>
    <div class="card setting-profile-tab">
        <div class="card-header">
            <h5>Profile</h5>
        </div>
        <div class="card-body">
            <div class="profile-tab profile-container">
                <!-- Flash-Nachricht -->
                @if (session()->has('success'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session()->has('error'))
                    <div id="flash-message" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Profilbilder -->
                <div class="image-details position-relative">
                    <div class="profile-image">
                        <img src="{{ $previewUrl }}" alt="Profile Background" class="img-fluid w-100 rounded" style="object-fit: cover; height: 250px;">
                    </div>
                    <div class="profile-pic position-absolute" style="bottom: -30px; left: 50%; transform: translateX(-50%);">
                        <div class="avatar-upload text-center">
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload" wire:model="profilePicture" accept=".png, .jpg, .jpeg" style="display: none;">
                                <label for="imageUpload" class="btn btn-primary btn-sm">
                                    <i class="ti ti-photo-heart"></i> Edit
                                </label>
                            </div>
                            <div class="avatar-preview mt-2">
                                <img src="{{ $previewUrl }}" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formular -->
                <form wire:submit.prevent="save">
                    <h5 class="mb-2 text-dark f-w-600">User Info</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" wire:model.defer="user.first_name" class="form-control">
                                @error('user.first_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" wire:model.defer="user.last_name" class="form-control">
                                @error('user.last_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" wire:model.defer="user.email" class="form-control" disabled>
                            </div>
                        </div>

                        <h5 class="mb-2 text-dark f-w-600">Personal Info</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea wire:model.defer="user.address" class="form-control"></textarea>
                                @error('user.address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Address 2</label>
                                <textarea wire:model.defer="user.address_2" class="form-control"></textarea>
                                @error('user.address_2') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("Street", app()->getLocale())</label>
                                <input type="text" wire:model.defer="user.street" class="form-control">
                                @error('user.street') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("Number", app()->getLocale())</label>
                                <input type="text" wire:model.defer="user.number" class="form-control">
                                @error('user.number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("City", app()->getLocale())</label>
                                <input type="text" wire:model.defer="user.city" class="form-control">
                                @error('user.city') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("Bundesland", app()->getLocale())</label>
                                <input type="text" wire:model.defer="user.state" class="form-control">
                                @error('user.state') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("Postleitzahl", app()->getLocale())</label>
                                <input type="text" wire:model.defer="user.zip" class="form-control">
                                @error('user.zip') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <h5 class="mb-2 text-dark f-w-600">@autotranslate("System Preferences", app()->getLocale())</h5>
                        <div class="col-md-6 col-xl-4">
                            <div class="mb-3">
                                <label class="form-label">@autotranslate("System Language", app()->getLocale()) </label>
                                <select wire:model="user.language" class="form-select">
                                    @foreach ($availableLanguages as $code => $locale)
                                        <option value="{{ $code }}">{{ $locale['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('user.language') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">@autotranslate("Save", app()->getLocale())</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <style>
        .image-details {
    position: relative;
    margin-bottom: 60px; /* Platz für das kleine Bild */
}

.profile-image img {
    border-radius: 8px; /* Optional: Runde Ecken für das Hintergrundbild */
    height: 250px;
    width: 100%;
    object-fit: cover;
}

.profile-pic .avatar-preview img {
    border: 2px solid #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}
.scrollable-dropdown {
    max-height: 250px; /* Maximale Höhe des Dropdowns */
    overflow-y: auto;  /* Ermöglicht vertikales Scrollen */
}

/* Verhindert, dass Dropdowns außerhalb des Bildschirms angezeigt werden */
.dropdown-menu {
    position: absolute !important;
    z-index: 1050; /* Bootstrap-Dropdowns haben standardmäßig einen hohen Z-Index */
    will-change: transform;
}

    </style>

<script>

</script>
</div>
