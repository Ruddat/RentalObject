<div>
    <form wire:submit.prevent="search">
        <div class="wd-find-select">
            <!-- Property Type -->
            <div class="form-group">
                <label>Type</label>
                <select wire:model="type" class="form-control">
                    <option value="all">All</option>
                    @foreach($propertyTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Location -->
            <div class="form-group">
                <label>Location</label>
                <input type="text" wire:model="location" class="form-control" placeholder="Search Location">
            </div>

            <!-- Keyword -->
            <div class="form-group">
                <label>Keyword</label>
                <input type="text" wire:model="keyword" class="form-control" placeholder="Search Keyword">
            </div>

            <!-- Price Range -->
            <div class="form-group">
                <label>Price</label>
                <div class="d-flex">
                    <input type="number" wire:model="minPrice" class="form-control" placeholder="Min">
                    <input type="number" wire:model="maxPrice" class="form-control" placeholder="Max">
                </div>
            </div>

            <!-- Size Range -->
            <div class="form-group">
                <label>Size (m²)</label>
                <div class="d-flex">
                    <input type="number" wire:model="minSize" class="form-control" placeholder="Min">
                    <input type="number" wire:model="maxSize" class="form-control" placeholder="Max">
                </div>
            </div>

            <!-- Rooms -->
            <div class="form-group">
                <label>Rooms</label>
                <select wire:model="rooms" class="form-control">
                    <option value="">Any</option>
                    @for($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <!-- Amenities -->
            <div class="form-group">
                <label>Amenities</label>
                @foreach($amenities as $amenity)
                    <div>
                        <input type="checkbox" wire:model="selectedAmenities" value="{{ $amenity->id }}">
                        {{ $amenity->name }}
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <div class="search-results mt-5">
        @foreach($properties as $property)
            <div class="property-item">
                <h3>{{ $property->title }}</h3>
                <p>{{ $property->city }}</p>
                <p>Price: €{{ $property->objPrices->cold_rent ?? 'N/A' }}</p>
                <p>Size: {{ $property->objDetails->area ?? 'N/A' }} m²</p>
            </div>
        @endforeach
    </div>
</div>
