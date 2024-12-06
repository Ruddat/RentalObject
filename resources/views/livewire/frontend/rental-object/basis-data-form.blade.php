<div id="basisdaten" class="widget-box-2 mb-20 bg-primary-yellow">
    <div class="widget-box-2-title">
        <h4 class="widget-title">@autotranslate("Basisdaten für:", app()->getLocale()) {{ $propertyTypeName }}</h4>
    </div>
    <div>

        @php
            $fields = config('form_fields.' . $propertyTypeName) ?? [];
        @endphp

        @foreach ($fields as $field)
            @if ($field === 'area')
                <div class="form-group">
                    <label for="area">@autotranslate("Area m²", app()->getLocale())</label>
                    <input type="number" wire:model.lazy="data.area" id="area" class="form-control">
                    @error('data.area') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'landArea')
                <div class="form-group">
                    <label for="landArea">@autotranslate("Land Area m²", app()->getLocale())</label>
                    <input type="text" wire:model.lazy="data.landArea" id="landArea" class="form-control">
                    @error('data.landArea') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'rooms')
                <div class="form-group">
                    <label for="rooms">@autotranslate("Rooms", app()->getLocale())</label>
                    <input type="number" wire:model.lazy="data.rooms" id="rooms" class="form-control">
                    @error('data.rooms') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'referenceNumber')
                <div class="form-group  {{ $field === 'referenceNumber' ? '' : 'd-none' }}">
                    <label for="referenceNumber">@autotranslate("Reference Number", app()->getLocale())</label>
                    <input type="text" wire:model.lazy="data.referenceNumber" id="referenceNumber" class="form-control">
                    @error('data.referenceNumber') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'divisibleArea')
            <div id="divisibleArea" class="d-flex justify-content-between align-items-center" style="display: block; gap: 20px;">
                <label for="divisibleArea">Teilbar <span class="color_07">(m²)</span></label>
                <div class="form-group">
                    <label for="divisibleMin">Min <span class="color_07">(m²)</span></label>
                    <input type="text" wire:model.lazy="data.divisibleMin" maxlength="20" id="divisibleMin" class="form-control" spellcheck="false">
                    @error('data.divisibleMin') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="divisibleMax">Max <span class="color_07">(m²)</span></label>
                    <input type="text" wire:model.lazy="data.divisibleMax" maxlength="20" id="divisibleMax" class="form-control" spellcheck="false">
                    @error('data.divisibleMax') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        @endif

            @if ($field === 'furniture')
                <div class="form-group">
                    <label for="furniture">@autotranslate("Furniture", app()->getLocale())</label>
                    <select wire:model.lazy="data.furniture" id="furniture" class="form-control">
                        <option value="False">Unfurnished</option>
                        <option value="True">Furnished</option>
                    </select>
                    @error('data.furniture') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'availableFrom')
                <div class="form-group {{ $field === 'availableFrom' ? '' : 'd-none' }}">
                    <label for="availableFrom">@autotranslate("Available From", app()->getLocale())</label>
                    <input type="date" wire:model.lazy="data.availableFrom" id="availableFrom" class="form-control">
                    @error('data.availableFrom') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'position')
                <div class="form-group {{ $field === 'position' ? '' : 'd-none' }}">
                    <label for="position">Position</label>
                    <input type="text" wire:model.lazy="data.position" id="position" class="form-control">
                    @error('data.position') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'availableTo')
                <div class="form-group {{ $field === 'availableTo' ? '' : 'd-none' }}">
                    <label for="availableTo">Available To</label>
                    <input type="date" wire:model.lazy="data.availableTo" id="availableTo" class="form-control">
                    @error('data.availableTo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'maxPersons')
                <div class="form-group {{ $field === 'maxPersons' ? '' : 'd-none' }}">
                    <label for="maxPersons">Max. Persons</label>
                    <input type="text" wire:model.lazy="data.maxPersons" id="maxPersons" class="form-control">
                    @error('data.maxPersons') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'wgSize')
                <div class="form-group {{ $field === 'wgSize' ? '' : 'd-none' }}">
                    <label for="wgSize">WG Size</label>
                    <input type="text" wire:model.lazy="data.wgSize" id="wgSize" class="form-control">
                    @error('data.wgSize') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'preferences')
                <div class="form-group {{ $field === 'preferences' ? '' : 'd-none' }}">
                    <label for="preferences">Preferences</label>
                    <input type="text" wire:model.lazy="data.preferences" id="preferences" class="form-control">
                    @error('data.preferences') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif



            @if ($field === 'buildYear')
                <div class="form-group {{ $field === 'buildYear' ? '' : 'd-none' }}">
                    <label for="buildYear">@autotranslate("Build Year", app()->getLocale())</label>
                    <input type="number" wire:model.lazy="data.buildYear" id="buildYear" class="form-control">
                    @error('data.buildYear') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'moveIn')
            <div class="form-group">
                <label for="moveIn">@autotranslate("Move In", app()->getLocale())</label>
                <input type="date" wire:model.lazy="data.moveIn" id="moveIn" class="form-control">
                @error('data.moveIn') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        @endif


            @if ($field === 'seats')
                <div class="form-group {{ $field === 'seats' ? '' : 'd-none' }}">
                    <label for="seats">@autotranslate("Seats", app()->getLocale())</label>
                    <input type="text" wire:model.lazy="data.seats" id="seats" class="form-control">
                    @error('data.seats') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'floor')
                <div class="form-group {{ $field === 'floor' ? '' : 'd-none' }}">
                    <label for="floor">@autotranslate("Etage", app()->getLocale())</label>
                    <select wire:model.lazy="data.floor" id="floor" class="form-control">
                        @for ($i = 0; $i <= 50; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('data.floor') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

            @endif

            @if ($field === 'floorArea')
                <div class="form-group {{ $field === 'floorArea' ? '' : 'd-none' }}">
                    <label for="floorArea">Floor Area</label>
                    <input type="text" wire:model.lazy="data.floorArea" id="floorArea" class="form-control">
                    @error('data.floorArea') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'windowArea')
                <div class="form-group {{ $field === 'windowArea' ? '' : 'd-none' }}">
                    <label for="windowArea">Window Area</label>
                    <input type="text" wire:model.lazy="data.windowArea" id="windowArea" class="form-control">
                    @error('data.windowArea') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'ceilingHeight')
                <div class="form-group {{ $field === 'ceilingHeight' ? '' : 'd-none' }}">
                    <label for="ceilingHeight">Ceiling Height</label>
                    <input type="text" wire:model.lazy="data.ceilingHeight" id="ceilingHeight" class="form-control">
                    @error('data.ceilingHeight') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'roomHeight')
                <div class="form-group {{ $field === 'roomHeight' ? '' : 'd-none' }}">
                    <label for="roomHeight">Room Height</label>
                    <input type="text" wire:model.lazy="data.roomHeight" id="roomHeight" class="form-control">
                    @error('data.roomHeight') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($field === 'minLease')
                <div class="form-group {{ $field === 'minLease' ? '' : 'd-none' }}">
                    <label for="minLease">Min. Lease</label>
                    <input type="text" wire:model.lazy="data.minLease" id="minLease" class="form-control">
                    @error('data.minLease') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif

            <!-- Weitere Felder -->
        @endforeach
    </div>


</div>
