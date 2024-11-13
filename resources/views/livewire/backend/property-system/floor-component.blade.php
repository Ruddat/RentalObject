<div class="card mb-4">
    @if (session()->has('message'))
    <div class="alert alert-success">
        @autotranslate(session('message'), app()->getLocale())
    </div>
@endif

    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>@autotranslate("Floors", app()->getLocale())</h5>
        <button wire:click="toggleForm" class="btn btn-primary btn-sm">
            {{ $showForm ? 'Hide' : 'Add Floor' }}
        </button>
    </div>

        <!-- Formular zum Hinzufügen einer Etage -->
        @if ($showForm)
    <div class="card-body">

        <form wire:submit.prevent="addFloor" class="app-form">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Floor Name<span>*</span></label>
                    <input type="text" wire:model.defer="floorName" class="form-control" placeholder="Floor Name">
                    @error('floorName') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Floor Price</label>
                    <input type="number" wire:model.defer="floorPrice" class="form-control" placeholder="Price">
                    @error('floorPrice') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Price Postfix</label>
                    <input type="text" wire:model.defer="pricePostfix" class="form-control" placeholder="e.g., /month">
                    @error('pricePostfix') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Floor Size</label>
                    <input type="number" wire:model.defer="floorSize" class="form-control" placeholder="Size">
                    @error('floorSize') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Size Postfix</label>
                    <input type="text" wire:model.defer="sizePostfix" class="form-control" placeholder="e.g., sqft">
                    @error('sizePostfix') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Bedrooms</label>
                    <input type="number" wire:model.defer="bedrooms" class="form-control" placeholder="0">
                    @error('bedrooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Bathrooms</label>
                    <input type="number" wire:model.defer="bathrooms" class="form-control" placeholder="0">
                    @error('bathrooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Description</label>
                    <textarea wire:model.defer="description" class="form-control" rows="2" placeholder="Description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>


                <div class="col-md-12 mb-3">
                    <label class="form-label">Floor Plan (Image or PDF)</label>
                    <input type="file" wire:model="floorPlan" class="form-control">
                    @error('floorPlan') <span class="text-danger">{{ $message }}</span> @enderror

                    @if ($floorPlan)
                        <p class="mt-2">Selected File: {{ $floorPlan->getClientOriginalName() }}</p>
                    @endif
                </div>

            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Add Floor</button>
            </div>
        </form>
    </div>
    @endif
</div>
