<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="saveCertificate">
        <div class="form-group">
            <label for="certificate">Zertifikat (X.509 - .pem-Inhalt)</label>
            <textarea wire:model="certificate" class="form-control" id="certificate" rows="5"></textarea>
            @error('certificate') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="privateKey">Privater Schlüssel (.key-Inhalt)</label>
            <textarea wire:model="privateKey" class="form-control" id="privateKey" rows="5"></textarea>
            @error('privateKey') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="keyPassword">Schlüssel-Passwort (optional)</label>
            <input type="password" wire:model="keyPassword" class="form-control" id="keyPassword">
            @error('keyPassword') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
</div>
