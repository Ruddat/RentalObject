<div class="card mb-4">
    <div class="card-header">
        <h5>@autotranslate("Price Details", app()->getLocale())</h5>
    </div>

    <div class="card-body">
        <form wire:submit.prevent="submitPrice" class="app-form">
            <div class="row">
                <!-- Price -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Price<span>*</span></label>
                    <input type="number" wire:model.defer="price" class="form-control" placeholder="Enter price">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Currency Unit -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Currency Unit</label>
                    <input type="text" wire:model.defer="currencyUnit" class="form-control" placeholder="e.g., USD, EUR">
                    @error('currencyUnit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Before Price Label -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Before Price Label</label>
                    <input type="text" wire:model.defer="beforePriceLabel" class="form-control" placeholder="e.g., Starting from">
                    @error('beforePriceLabel') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- After Price Label -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">After Price Label</label>
                    <input type="text" wire:model.defer="afterPriceLabel" class="form-control" placeholder="e.g., per month">
                    @error('afterPriceLabel') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Save Price</button>
            </div>
        </form>
    </div>
</div>
