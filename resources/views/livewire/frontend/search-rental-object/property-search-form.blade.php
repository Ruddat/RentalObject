    <div>


        <ul class="nav-tab-form style-1 justify-content-center" role="tablist">
            <li class="nav-tab-item" role="presentation">
                <a href="#" wire:click.prevent="setActiveTab('forRent')"
                   class="nav-link-item {{ $activeTab === 'forRent' ? 'active' : '' }}">
                    @autotranslate("For Rent", app()->getLocale())
                </a>
            </li>
            <li class="nav-tab-item" role="presentation">
                <a href="#" wire:click.prevent="setActiveTab('forSale')"
                   class="nav-link-item {{ $activeTab === 'forSale' ? 'active' : '' }}">
                    @autotranslate("For Sale", app()->getLocale())
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" role="tabpanel">
                <div class="form-sl">
                    <form wire:submit.prevent="search">
                        <div class="wd-find-select">
                            <div class="inner-group">
                                <div class="form-group-1 search-form form-style">
                                    <label>@autotranslate("Type", app()->getLocale())</label>
                                    <div class="group-select">
                                        <div class="nice-select" id="type-select" tabindex="0">
                                            <span class="current">{{ $selectedTypeName }}</span>
                                            <ul class="list">
                                                <li
                                                    data-value="all"
                                                    class="option {{ $type === 'all' ? 'selected' : '' }}"
                                                    wire:click="$set('type', 'all')">
                                                    @autotranslate("All", app()->getLocale())
                                                </li>
                                                @foreach($propertyTypes as $propertyType)
                                                    <li
                                                        data-value="{{ $propertyType->id }}"
                                                        class="option {{ $type == $propertyType->id ? 'selected' : '' }}"
                                                        wire:click="$set('type', '{{ $propertyType->id }}')">
                                                        {{ $propertyType->name }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>





                                <div class="form-group-2 form-style">
                                    <label>@autotranslate("Location", app()->getLocale())</label>
                                    <div class="group-ip">
                                        <input type="text" wire:model="location" class="form-control" placeholder="Search Location" required>
                                        <a href="#" class="icon icon-location" id="get-location">
                                        </a>
                                    </div>
                                </div>


                                <div class="form-group-3 form-style">
                                    <label>@autotranslate("Keyword", app()->getLocale())</label>
                                    <input type="text"
                                           wire:model="keyword"
                                           class="form-control"
                                           placeholder="Search Keyword."
                                           title="Search for">
                                </div>

                            </div>
                            <div class="box-btn-advanced">
                                <div class="form-group-4 box-filter">
                                    <a class="tf-btn btn-line filter-advanced pull-right">
                                        <span class="text-1">@autotranslate("Search advanced", app()->getLocale())</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 12.375V3.4375M5.5 12.375C5.86467 12.375 6.21441 12.5199 6.47227 12.7777C6.73013 13.0356 6.875 13.3853 6.875 13.75C6.875 14.1147 6.73013 14.4644 6.47227 14.7223C6.21441 14.9801 5.86467 15.125 5.5 15.125M5.5 12.375C5.13533 12.375 4.78559 12.5199 4.52773 12.7777C4.26987 13.0356 4.125 13.3853 4.125 13.75C4.125 14.1147 4.26987 14.4644 4.52773 14.7223C4.78559 14.9801 5.13533 15.125 5.5 15.125M5.5 15.125V18.5625M16.5 12.375V3.4375M16.5 12.375C16.8647 12.375 17.2144 12.5199 17.4723 12.7777C17.7301 13.0356 17.875 13.3853 17.875 13.75C17.875 14.1147 17.7301 14.4644 17.4723 14.7223C17.2144 14.9801 16.8647 15.125 16.5 15.125M16.5 12.375C16.1353 12.375 15.7856 12.5199 15.5277 12.7777C15.2699 13.0356 15.125 13.3853 15.125 13.75C15.125 14.1147 15.2699 14.4644 15.5277 14.7223C15.7856 14.9801 16.1353 15.125 16.5 15.125M16.5 15.125V18.5625M11 6.875V3.4375M11 6.875C11.3647 6.875 11.7144 7.01987 11.9723 7.27773C12.2301 7.53559 12.375 7.88533 12.375 8.25C12.375 8.61467 12.2301 8.96441 11.9723 9.22227C11.7144 9.48013 11.3647 9.625 11 9.625M11 6.875C10.6353 6.875 10.2856 7.01987 10.0277 7.27773C9.76987 7.53559 9.625 7.88533 9.625 8.25C9.625 8.61467 9.76987 8.96441 10.0277 9.22227C10.2856 9.48013 10.6353 9.625 11 9.625M11 9.625V18.5625" stroke="#161E2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <button type="submit" class="tf-btn btn-search primary">Search <i class="icon icon-search"></i> </button>
                            </div>

                        </div>
                        <div class="wd-search-form">
                            <div class="grid-2 group-box group-price">
                                <!-- Preisbereich -->
                                <div class="widget-price">
                                    <div class="box-title-price">
                                        <span class="title-price fw-6">Price Range:</span>
                                    </div>
                                    <livewire:frontend.helper.double-range-slider
                                        :minValue="$minPrice"
                                        :maxValue="$maxPrice"
                                        :minLimit="$minPrice"
                                        :maxLimit="$maxPrice"
                                        step="100"
                                        sliderType="price"
                                    />
                                </div>

                                <!-- Größenbereich -->
                                <div class="widget-price">
                                    <div class="box-title-price">
                                        <span class="title-price fw-6">Size Range:</span>
                                    </div>
                                    <livewire:frontend.helper.double-range-slider
                                        :minValue="$minSize"
                                        :maxValue="$maxSize"
                                        :minLimit="$minSize"
                                        :maxLimit="$maxSize"
                                        step="10"
                                        sliderType="size"
                                    />
                                </div>
                            </div>


                            <div class="grid-2 group-box">
                                <div class="group-select grid-2">
                                    <div class="box-select">
                                        <label class="title-select fw-6">@autotranslate("Rooms", app()->getLocale())</label>
                                        <select class="form-control" wire:model="rooms">
                                            <option value="0">@autotranslate("All", app()->getLocale())</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        <label class="title-select fw-6">@autotranslate("Bathrooms", app()->getLocale())</label>
                                        <select class="form-control" wire:model="bathrooms">
                                            <option value="0">@autotranslate("All", app()->getLocale())</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="group-select grid-2">
                                    <div class="box-select">
                                        <label class="title-select fw-6">@autotranslate("Bedrooms", app()->getLocale())</label>
                                        <select class="form-control" wire:model="bedrooms">
                                            <option value="0">@autotranslate("All", app()->getLocale())</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        @if ($typeDropdownVisible ?? true)
                                            <label class="title-select fw-6">@autotranslate("Type", app()->getLocale())</label>
                                            <select class="form-control" wire:model="future">
                                                <option value="all">All</option>
                                                <option value="villa">Villa</option>
                                                <option value="studio">Studio</option>
                                                <option value="office">Office</option>
                                            </select>
                                        @else
                                            <label class="title-select fw-6">@autotranslate("For Future", app()->getLocale())</label>
                                            <select class="form-control" disabled>
                                                <option value="">N/A</option>
                                            </select>
                                        @endif
                                    </div>
                                </div>
                            </div>




                            <div class="group-checkbox">
                                <div class="text-1 text-black-2">Amenities:</div>
                                <div class="group-amenities grid-6">
                                    @foreach($amenities as $index => $amenity)
                                        <div class="box-amenities">
                                            <fieldset class="amenities-item mt-16">
                                                <input type="checkbox" class="tf-checkbox style-1"
                                                id="amenity-{{ $index }}"
                                                wire:model="selectedAmenities"
                                                value="{{ $amenity->id }}">
                                                <label for="amenity-{{ $index }}" class="text-cb-amenities">@autotranslate($amenity->name, app()->getLocale())</label>
                                            </fieldset>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>



        <style>
    .slider {
        height: 10px;
        background-color: #f0f0f0;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
    }

    .slider-thumb {
        width: 20px;
        height: 20px;
        background-color: #007bff;
        border-radius: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 12px;
        cursor: pointer;
    }
        </style>




    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const locationInput = document.querySelector('input[wire\\:model="location"]');
    const getLocationButton = document.getElementById('get-location');

    if (!locationInput) {
        console.error('Location input field not found.');
        return;
    }

    if (getLocationButton) {
        getLocationButton.addEventListener('click', async function (e) {
            e.preventDefault();

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    async function (position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        try {
                            const response = await fetch('/get-current-location', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                },
                                body: JSON.stringify({ latitude, longitude }),
                            });

                            if (!response.ok) throw new Error('Failed to fetch location');

                            const data = await response.json();

                            if (data && data.location) {
                                locationInput.value = data.location;
                                locationInput.dispatchEvent(new Event('input')); // Trigger Livewire
                            } else {
                                alert('Location not found.');
                            }
                        } catch (error) {
                            console.error('Error fetching location:', error);
                            alert('Error fetching location from server.');
                        }
                    },
                    function (error) {
                        console.error('Geolocation error:', error);
                        alert('Error getting location: ' + error.message);
                    },
                    { timeout: 10000 } // Timeout von 10 Sekunden
                );
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        });
    }
});

    </script>

