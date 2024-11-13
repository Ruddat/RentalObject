<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <h5>@autotranslate("Property Information", app()->getLocale())</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submitInformation" class="app-form">
                <div class="row">
                    <!-- Title -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title<span>*</span></label>
                        <input type="text" wire:model.defer="title" class="form-control" placeholder="Property Title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Full Address -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Address<span>*</span></label>
                        <input type="text" wire:model.defer="fullAddress" class="form-control" placeholder="Enter property full address">
                        @error('fullAddress') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea wire:model.defer="description" class="form-control" rows="3" placeholder="Property Description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Zip Code -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Zip Code<span>*</span></label>
                        <input type="text" wire:model.defer="zipCode" class="form-control" placeholder="Enter zip code">
                        @error('zipCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Country -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Country<span>*</span></label>
                        <input type="text" wire:model.defer="country" class="form-control" placeholder="Country">
                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- State/Province -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">State/Province<span>*</span></label>
                        <input type="text" wire:model.defer="state" class="form-control" placeholder="State or Province">
                        @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Neighborhood -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Neighborhood</label>
                        <input type="text" wire:model.defer="neighborhood" class="form-control" placeholder="Neighborhood">
                        @error('neighborhood') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Location -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" wire:model.defer="location" class="form-control" placeholder="Location">
                        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="box box-fieldset col-md-12 mb-3">
                        <label>Location:<span>*</span></label>
                        <div class="box-ip">
                            <input type="text" class="form-control" value="None">
                            <a href="#" class="btn-location"><i class="ti ti-current-location"></i>
                            </a>
                        </div>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d135905.11693909427!2d-73.95165795400088!3d41.17584829642291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727094281524!5m2!1sen!2s" height="456" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save Information</button>
                </div>
            </form>
        </div>
    </div>
<style>

.box-fieldset .box-ip {
    position: relative;
}
.box-fieldset .box-ip .btn-location {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
}
.box-fieldset .map {
    width: 100%;
}
.box-fieldset .map {
    margin-top: 20px;
    height: 456px;
    border-radius: 16px;
    overflow: hidden;
}
</style>

</div>
