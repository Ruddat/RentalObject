<div class="card mb-4">
    <div class="card-header">
        <h5>@autotranslate("Amenities", app()->getLocale())</h5>
    </div>
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                @autotranslate(session('message'), app()->getLocale())
            </div>
        @endif

        <form wire:submit.prevent="submitAmenities">
            <div class="row">
                @foreach ($availableAmenities as $index => $amenity)
                    <div class="col-md-6 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="amenities" value="{{ $amenity }}" id="amenity-{{ $index }}">
                            <label class="form-check-label" for="amenity-{{ $index }}">
                                @autotranslate($amenity, app()->getLocale())
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">@autotranslate("Amenities Save", app()->getLocale())</button>
            </div>
        </form>
    </div>
</div>
