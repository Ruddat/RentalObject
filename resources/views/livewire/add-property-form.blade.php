<div>
    <div class="widget-box-2 mb-20">
        <h5 class="title">Upload Media</h5>
        <div class="box-uploadfile text-center">
            <div class="uploadfile">
                <div class="btn-upload tf-btn primary">
                    <input type="file" wire:model="photos" multiple class="ip-file">
                </div>
                @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                <p class="file-name fw-5">or drag photos here <br><span>(Up to 10 photos)</span></p>
            </div>
        </div>
        <div class="box-img-upload">
            @foreach($photos as $photo)
                <div class="item-upload file-delete">
                    <img src="{{ $photo->temporaryUrl() }}" alt="img">
                    <span class="icon icon-trash remove-file" wire:click="removePhoto({{ $loop->index }})"></span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Weitere Felder für das Formular -->
    <div class="widget-box-2 mb-20">
        <h5 class="title">Information</h5>
        <fieldset class="box box-fieldset">
            <label>Title:<span>*</span></label>
            <input type="text" wire:model="title" class="form-control" placeholder="Choose">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <fieldset class="box box-fieldset">
            <label>Description:</label>
            <textarea wire:model="description" class="textarea" placeholder="Your Description"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <fieldset class="box box-fieldset">
            <label>Full Address:<span>*</span></label>
            <input type="text" wire:model="address" class="form-control" placeholder="Enter property full address">
            @error('address') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <fieldset class="box box-fieldset">
            <label>Zip Code:<span>*</span></label>
            <input type="text" wire:model="zip_code" class="form-control" placeholder="Enter property zip code">
            @error('zip_code') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <fieldset class="box box-fieldset">
            <label>Country:<span>*</span></label>
            <input type="text" wire:model="country" class="form-control" placeholder="Country">
            @error('country') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <fieldset class="box box-fieldset">
            <label>Price:<span>*</span></label>
            <input type="text" wire:model="price" class="form-control" placeholder="Example value: 12345.67">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </fieldset>

        <button wire:click="saveProperty" class="tf-btn primary">Add Property</button>

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    </div>
</div>
