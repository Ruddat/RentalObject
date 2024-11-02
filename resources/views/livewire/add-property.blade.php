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


    <div class="widget-box-2 mb-20">
        <h5 class="title">Upload Media</h5>
        <div class="box-uploadfile text-center">
            <div class="uploadfile">
                <div class="btn-upload tf-btn primary">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.625 14.375V17.1875C13.625 17.705 13.205 18.125 12.6875 18.125H4.5625C4.31386 18.125 4.0754 18.0262 3.89959 17.8504C3.72377 17.6746 3.625 17.4361 3.625 17.1875V6.5625C3.625 6.045 4.045 5.625 4.5625 5.625H6.125C6.54381 5.62472 6.96192 5.65928 7.375 5.72834M13.625 14.375H16.4375C16.955 14.375 17.375 13.955 17.375 13.4375V9.375C17.375 5.65834 14.6725 2.57417 11.125 1.97834C10.7119 1.90928 10.2938 1.87472 9.875 1.875H8.3125C7.795 1.875 7.375 2.295 7.375 2.8125V5.72834M13.625 14.375H8.3125C8.06386 14.375 7.8254 14.2762 7.64959 14.1004C7.47377 13.9246 7.375 13.6861 7.375 13.4375V5.72834M17.375 11.25V9.6875C17.375 8.94158 17.0787 8.22621 16.5512 7.69876C16.0238 7.17132 15.3084 6.875 14.5625 6.875H13.3125C13.0639 6.875 12.8254 6.77623 12.6496 6.60041C12.4738 6.4246 12.375 6.18614 12.375 5.9375V4.6875C12.375 4.31816 12.3023 3.95243 12.1609 3.6112C12.0196 3.26998 11.8124 2.95993 11.5512 2.69876C11.2901 2.4376 10.98 2.23043 10.6388 2.08909C10.2976 1.94775 9.93184 1.875 9.5625 1.875H8.625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Select photos
                    <input type="file" class="ip-file">
                </div>
                <p class="file-name fw-5">or drag photos here <br>
                    <span>(Up to 10 photos)</span></p>
            </div>
        </div>
        <div class="box-img-upload">
            <div class="item-upload file-delete">
                <img src="{{ URL::asset('/build/images/home/house-18.jpg') }}" alt="img">
                <span class="icon icon-trash remove-file"></span>
            </div>
            <div class="item-upload file-delete">
                <img src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                <span class="icon icon-trash"></span>

            </div>
            <div class="item-upload file-delete">
                <img src="{{ URL::asset('/build/images/home/house-14.jpg') }}" alt="img">
                <span class="icon icon-trash remove-file"></span>

            </div>
            <div class="item-upload file-delete">
                <img src="{{ URL::asset('/build/images/home/house-32.jpg') }}" alt="img">
                <span class="icon icon-trash remove-file"></span>

            </div>
            <div class="item-upload file-delete">
                <img src="{{ URL::asset('/build/images/home/house-33.jpg') }}" alt="img">
                <span class="icon icon-trash remove-file"></span>

            </div>
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
