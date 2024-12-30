<div>
    <h5>Fotos verwalten</h5>

    <!-- Foto-Hochladen -->
    <form wire:submit.prevent="uploadPhotos" class="mb-4">
        <input type="file" wire:model="newPhotos" multiple class="form-control">
        @error('newPhotos.*') <span class="text-danger">{{ $message }}</span> @enderror
        <button type="submit" class="btn btn-success mt-2">Hochladen</button>
    </form>

    <!-- Galerie -->
    @if($photos->isNotEmpty())
    <div class="box-img-upload mt-4">
        @foreach($photos as $index => $photo)
        <div class="item-upload file-delete">
            <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Foto" class="img-thumbnail">
            <div class="d-flex justify-content-between mt-2">
                <button wire:click="moveUp({{ $photo->id }})" class="btn btn-sm btn-outline-primary" {{ $index === 0 ? 'disabled' : '' }}>
                    Hoch
                </button>
                <button wire:click="moveDown({{ $photo->id }})" class="btn btn-sm btn-outline-primary" {{ $index === count($photos) - 1 ? 'disabled' : '' }}>
                    Runter
                </button>
                <button wire:click="deletePhoto({{ $photo->id }})" class="btn btn-sm btn-danger">
                    Löschen
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Keine Fotos vorhanden.</p>
    @endif

    <style>
        .box-img-upload {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .item-upload {
            position: relative;
            width: 120px;
            text-align: center;
        }

        .item-upload img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }
    </style>
</div>
