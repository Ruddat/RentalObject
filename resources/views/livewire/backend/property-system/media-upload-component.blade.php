<div class="widget-box-2 mb-20" x-data="{ isDropping: false }">
    <h5 class="title mb-4">Upload Media</h5>

    <p class="text-muted">You can upload a maximum of {{ $maxPhotos }} photos, each up to {{ $maxFileSize }}.</p>

    <!-- Drag-and-Drop Upload Box -->
    <div class="box-uploadfile text-center"
        x-on:dragover.prevent="isDropping = true"
        x-on:dragleave.prevent="isDropping = false"
        x-on:drop.prevent="isDropping = false; handleDrop($event)"
        :class="{ 'hover': isDropping }"
    >
        <div class="uploadfile">
            <input type="file" wire:model="photos" multiple style="display: none;" x-ref="fileInput">
            <div class="btn-upload tf-btn primary" x-on:click="$refs.fileInput.click()">
                <i class="fa fa-upload fa-fw"></i>

                Select photos
            </div>
            <p class="file-name fw-5">or drag photos here<br><span>(Up to {{ $maxPhotos }} photos)</span></p>
        </div>
    </div>

    <!-- Loading Spinner -->
    <div wire:loading wire:target="uploadPhotos" class="loading-overlay">
   <!-- preload -->
   <div class="preload preload-container blur-overlay">
    <div class="preload-logo">
        <div class="spinner"></div>
        <span class="icon icon-villa-fill"></span>
    </div>
</div>
<!-- /preload -->
<p class="loading-text">Please wait...</p>
</div>



    <!-- Image Preview and Reordering -->
    <div id="sortable-container" class="box-img-upload mt-4">
        <!-- Persistente Fotos -->
        @if(!empty($persistedPhotos))
        @foreach($persistedPhotos as $index => $photo)
            <div class="item-upload file-delete" data-index="{{ $index }}" data-type="persisted">
                <img src="{{ Storage::url($photo['file_path']) }}" alt="Uploaded Image">
                <span class="icon-trash remove-file" wire:click="removePhoto({{ $photo['id'] }}, 'persisted')">
                    <i class="ti ti-trash"></i>
                </span>
                <div class="image-order">#{{ $index + 1 }}</div>
            </div>
        @endforeach
    @else
        <p class="text-muted">No photos have been uploaded yet.</p>
    @endif

        <!-- Temporäre Fotos -->
        @foreach($photos as $index => $photo)
        <div class="item-upload file-delete" data-index="{{ $index }}" data-type="temporary">
            <img src="{{ $photo->temporaryUrl() }}" alt="Uploaded Image">
            <span class="icon-trash remove-file" wire:click="removePhoto({{ $index }}, 'temporary')">
                <i class="ti ti-trash"></i>
            </span>
            <div class="image-order">#{{ $index + 1 }}</div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        <button wire:click="uploadPhotos" class="btn btn-primary w-100">Save Photos</button>
    </div>


    <style>
/* Allgemeine Upload-Box */
.box-uploadfile .uploadfile {
    border-radius: 16px;
    border: 2px dashed #e5e5ea;
    padding: 60px 30px;
    transition: background-color 0.3s, border-color 0.3s;
}

.box-uploadfile .uploadfile:hover {
    background-color: #f9f9f9;
    border-color: #c5c5c5;
}

/* Drag-and-Drop-Hover-Effekt */
.box-uploadfile.hover {
    background-color: #e8f4ff;
    border-color: #007bff;
}

/* Vorschau-Container */
.box-img-upload {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
}

/* Einzelnes Vorschaubild */
.box-img-upload .item-upload {
    border-radius: 10px;
    width: 120px;
    height: 120px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background: #f5f5f5;
}

/* Vorschau-Bilder richtig skalieren */
.box-img-upload .item-upload img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Bild proportional skalieren */
    border-radius: 10px;
}

/* Trash-Icon */
.box-img-upload .item-upload .icon-trash {
    position: absolute;
    right: 8px;
    top: 8px;
    background-color: rgba(0, 0, 0, 0.7);
    font-size: 16px;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.box-img-upload .item-upload .icon-trash:hover {
    background-color: rgba(255, 0, 0, 0.8);
}

/* Button-Stil */
.uploadfile .btn-upload {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 8px;
    background-color: #007bff;
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
}

.uploadfile .btn-upload:hover {
    background-color: #0056b3;
}

/* Dateiname-Text */
.file-name {
    font-size: 14px;
    color: #888;
    margin-top: 10px;
}

.box-img-upload {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.item-upload {
    position: relative;
    width: 120px;
    height: 120px;
    overflow: hidden;
    border-radius: 10px;
    cursor: grab;
    z-index: 10;

}

.item-upload.dragging {
    opacity: 0.5;
}

.item-upload .image-order {
    position: absolute;
    bottom: 5px;
    right: 5px;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 3px 5px;
    border-radius: 3px;
    font-size: 12px;
}
#sortable-container {
    z-index: 10; /* Höher als alle anderen Container */
    position: relative; /* Sicherstellen, dass der z-index angewendet wird */
}

.preload-container {
    display: flex
;
    position: relative;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 99999999999;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    blur: revert;
}


.blur-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.5); /* Halbtransparente weiße Überlagerung */
    backdrop-filter: blur(10px); /* Stärke der Unschärfe */
    z-index: 9999; /* Damit es über anderen Elementen liegt */
}

    </style>

</div>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', initializeSortable);

document.addEventListener('livewire:load', () => {
    initializeSortable();
    Livewire.hook('message.processed', initializeSortable);
});

function initializeSortable() {
    const container = document.getElementById('sortable-container');
    if (container) {
        new Sortable(container, {
            animation: 150,
            onEnd: (event) => {
                const order = Array.from(container.children).map(el => ({
                    index: el.dataset.index,
                    type: el.dataset.type,
                }));

                @this.call('updateOrder', order);
            },
        });
    }
}

</script>

