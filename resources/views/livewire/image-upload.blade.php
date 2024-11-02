<div class="widget-box-2 mb-20" x-data="{ isDropping: false }">
    <h5 class="title">Upload Media</h5>

    <!-- Drag and Drop Box -->
    <div class="box-uploadfile text-center"
        x-on:dragover.prevent="isDropping = true"
        x-on:dragleave.prevent="isDropping = false"
        x-on:drop.prevent="isDropping = false; handleDrop($event)"
        :class="{ 'border-blue-500': isDropping }"
    >
        <div class="uploadfile">
            <!-- File Input (Hidden) -->
            <input type="file" wire:model="photos" multiple style="display: none;" x-ref="fileInput" x-on:change="$refs.fileInput.dispatchEvent(new Event('change', { bubbles: true }))">
            <!-- Custom Button and Text for File Upload -->
            <div x-show="!isDropping" class="drag-instruction">
                <div class="btn-upload tf-btn primary" x-on:click="$refs.fileInput.click()">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG Path Here -->
                    </svg>
                    Select photos
                </div>
                <p class="file-name fw-5">or drag photos here <br><span>(Up to 10 photos)</span></p>
            </div>
            <div x-show="isDropping" class="drop-here">
                <p>Drop here</p>
            </div>
        </div>
    </div>

    <!-- Image Preview -->
    <div class="box-img-upload mt-4">
        @foreach($photos as $index => $photo)
            <div class="item-upload file-delete">
                <img src="{{ $photo->temporaryUrl() }}" alt="img" class="w-full h-full object-cover rounded">
                <span class="icon icon-trash remove-file" wire:click="removePhoto({{ $index }})"></span>
            </div>
        @endforeach
    </div>

    <!-- Error and Success Messages -->
    @error('photos.*') <span class="error text-red-500">{{ $message }}</span> @enderror
    @if (session()->has('message'))
        <div class="mt-4 text-green-500">{{ session('message') }}</div>
    @endif
</div>

<script>
    function handleDrop(event) {
        const fileInput = document.querySelector('input[type="file"]');
        fileInput.files = event.dataTransfer.files;
        fileInput.dispatchEvent(new Event('change', { bubbles: true }));
    }
</script>
