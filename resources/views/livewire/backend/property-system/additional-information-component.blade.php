<div class="card mb-4">
    <div class="card-header">
        <h5>@autotranslate("Additional Information", app()->getLocale())</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="submitAdditionalInfo" class="app-form">
            <div class="row">
                <!-- Property Type -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Property Type<span>*</span></label>
                    <input type="text" wire:model.defer="propertyType" class="form-control" placeholder="e.g., Apartment">
                    @error('propertyType') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Property Status -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Property Status<span>*</span></label>
                    <input type="text" wire:model.defer="propertyStatus" class="form-control" placeholder="e.g., For Sale">
                    @error('propertyStatus') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Property Label -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Property Label</label>
                    <input type="text" wire:model.defer="propertyLabel" class="form-control" placeholder="e.g., New Listing">
                    @error('propertyLabel') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Size -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Size (SqFt)</label>
                    <input type="number" wire:model.defer="size" class="form-control" placeholder="e.g., 2500">
                    @error('size') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Land Area -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Land Area (SqFt)</label>
                    <input type="number" wire:model.defer="landArea" class="form-control" placeholder="e.g., 5000">
                    @error('landArea') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Property ID -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Property ID</label>
                    <input type="text" wire:model.defer="propertyId" class="form-control" placeholder="e.g., 12345">
                    @error('propertyId') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Rooms -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Rooms</label>
                    <input type="number" wire:model.defer="rooms" class="form-control" placeholder="e.g., 5">
                    @error('rooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Bedrooms -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Bedrooms</label>
                    <input type="number" wire:model.defer="bedrooms" class="form-control" placeholder="e.g., 3">
                    @error('bedrooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Bathrooms -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Bathrooms</label>
                    <input type="number" wire:model.defer="bathrooms" class="form-control" placeholder="e.g., 2">
                    @error('bathrooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Garages -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Garages</label>
                    <input type="number" wire:model.defer="garages" class="form-control" placeholder="e.g., 1">
                    @error('garages') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Garage Size -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Garage Size (SqFt)</label>
                    <input type="number" wire:model.defer="garageSize" class="form-control" placeholder="e.g., 400">
                    @error('garageSize') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Year Built -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Year Built</label>
                    <input type="number" wire:model.defer="yearBuilt" class="form-control" placeholder="e.g., 2005">
                    @error('yearBuilt') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save Additional Info</button>
            </div>
        </form>
    </div>
</div>
