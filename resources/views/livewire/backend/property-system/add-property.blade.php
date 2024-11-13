<div class="main-content">
    <div class="main-content-inner">

        <!-- Property Information Component -->
        @livewire('backend.property-system.property-information-component')

        <!-- Additional Information Component -->
        @livewire('backend.property-system.additional-information-component')

        <!-- Amenities Component -->
        @livewire('backend.property-system.amenities-component')

        <!-- Price Component -->
        @livewire('backend.property-system.price-component')

        <!-- Floor Component -->
        @livewire('backend.property-system.floor-component')

        <!-- Added Floors Section -->
        @if($floors)
            <div class="card mb-4">
                <div class="card-header">
                    <h5>@autotranslate("Added Floors", app()->getLocale())</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($floors as $index => $floor)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Floor {{ $index + 1 }}:</strong> {{ $floor['floorName'] }} |
                                    <strong>Price:</strong> {{ $floor['floorPrice'] ?? 'N/A' }} {{ $floor['pricePostfix'] ?? '' }} |
                                    <strong>Size:</strong> {{ $floor['floorSize'] ?? 'N/A' }} {{ $floor['sizePostfix'] ?? '' }} |
                                    <strong>Bedrooms:</strong> {{ $floor['bedrooms'] ?? 0 }} |
                                    <strong>Bathrooms:</strong> {{ $floor['bathrooms'] ?? 0 }}

                                    <!-- Floor Plan Link -->
                                    @if(isset($floor['floorPlanPath']))
                                        <br><strong>Floor Plan:</strong>
                                        <a href="{{ asset('storage/' . $floor['floorPlanPath']) }}" target="_blank">View Plan</a>
                                    @endif
                                </div>
                                <button wire:click="removeFloor({{ $index }})" class="btn btn-danger btn-sm">
                                    Remove
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Media Upload Component -->
        @livewire('backend.property-system.media-upload-component')

        <!-- Virtual Tour Component -->
        @livewire('backend.property-system.virtual-tour-component')

        <!-- Video Component -->
        @livewire('backend.property-system.video-component')

        <!-- Save Button -->
        <div class="box-btn mb-4">
            <button wire:click="submitProperty" class="btn btn-outline-primary w-100">Add Property</button>
        </div>

        <!-- Gespeicherte Daten anzeigen -->
        @if ($isSaved)
            <div class="card mt-4">
                <div class="card-header">
                    <h5>@autotranslate("Saved Property Data", app()->getLocale())</h5>
                </div>

                        <!-- Vorschau hochgeladener Fotos -->
        @if($uploadedPhotos)
        <div class="card mt-4">
            <div class="card-header">
                <h5>Uploaded Photos</h5>
            </div>
            <div class="card-body">
                <div class="box-img-upload">
                    @foreach($uploadedPhotos as $photo)
                        <div class="item-upload">
                            <img src="{{ asset('storage/' . $photo['path']) }}" alt="Uploaded Photo">
                            <p>Order: {{ $photo['order'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
                <div class="card-body">
                    <h6>Property Information</h6>
                    <pre>{{ json_encode($propertyData, JSON_PRETTY_PRINT) }}</pre>

                    <h6>Price Information</h6>
                    <pre>{{ json_encode($priceData, JSON_PRETTY_PRINT) }}</pre>

                    <h6>Floors</h6>
                    <ul>
                        @foreach($floors as $floor)
                            <li>{{ json_encode($floor) }}</li>
                        @endforeach
                    </ul>

                    <h6>Amenities</h6>
                    <ul>
                        @foreach($selectedAmenities as $amenity)
                            <li>{{ $amenity }}</li>
                        @endforeach
                    </ul>

                    <h6>Virtual Tour</h6>
                    <pre>{{ json_encode($virtualTourData, JSON_PRETTY_PRINT) }}</pre>

                    <h6>Video Data</h6>
                    <pre>{{ json_encode($videoData, JSON_PRETTY_PRINT) }}</pre>
                </div>
            </div>
        @endif
    </div>
</div>
