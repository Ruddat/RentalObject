<div class="widget-box-2 mb-20" x-data="{ isDropping: false }">
    <h5 class="title mb-4">Upload Media</h5>

    <!-- Drag-and-Drop Upload Box -->
    <div class="box-uploadfile text-center"
        x-on:dragover.prevent="isDropping = true"
        x-on:dragleave.prevent="isDropping = false"
        x-on:drop.prevent="isDropping = false; handleDrop($event)"
        :class="{ 'hover': isDropping }"
    >
        <div class="uploadfile">
            <!-- Hidden File Input -->
            <input type="file" wire:model="photos" multiple style="display: none;" x-ref="fileInput">
            <div class="btn-upload tf-btn primary" x-on:click="$refs.fileInput.click()">
                <i class="ti ti-upload"></i>
                Select photos
            </div>
            <p class="file-name fw-5">or drag photos here<br><span>(Up to 10 photos)</span></p>
        </div>
    </div>

    <!-- Image Preview and Reordering -->
    <div id="sortable-container" class="box-img-upload mt-4">
        @foreach($photos as $index => $photo)
            <div class="item-upload file-delete" data-index="{{ $index }}">
                <img src="{{ $photo->temporaryUrl() }}" alt="Uploaded Image">
                <span class="icon-trash remove-file" wire:click="removePhoto({{ $index }})">
                    <i class="ti ti-trash"></i>
                </span>
                <div class="image-order">#{{ $index + 1 }}</div> <!-- Zeigt die Nummer an -->
            </div>
        @endforeach
    </div>

    @error('photos.*')
        <span class="text-danger">{{ $message }}</span>
    @enderror

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

    </style>

</div>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script>
    function handleDrop(event) {
        const fileInput = document.querySelector('input[type="file"]');
        const files = event.dataTransfer.files;

        // Assign dropped files to the file input
        fileInput.files = files;

        // Trigger change event to notify Livewire
        fileInput.dispatchEvent(new Event('change', { bubbles: true }));
    }


    document.addEventListener('DOMContentLoaded', () => {
        const sortable = new Sortable(document.getElementById('sortable-container'), {
            animation: 150,
            onEnd: (event) => {
                const order = Array.from(document.querySelectorAll('.item-upload')).map(el => el.dataset.index);
                @this.call('updateOrder', order); // Ruft eine Livewire-Methode auf
            },
        });
    });

</script>

