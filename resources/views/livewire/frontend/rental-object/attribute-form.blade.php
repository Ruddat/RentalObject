<div class="widget-box-2 mb-20 bg-light p-3">
    <h4 class="mb-3">Ausstattung & Merkmale</h4>
    <div class="row">
        @foreach ($groups as $group)
            <div class="col-md-3 mb-4">
                <h5>{{ $group->name }}</h5>
                @foreach ($group->attributes as $attribute)
                    <div class="form-check">
                        <input
                            type="checkbox"
                            id="attribute-{{ $attribute->id }}"
                            value="{{ $attribute->id }}"
                            wire:model.lazy="selectedAttributes"
                            class="form-check-input">
                        <label for="attribute-{{ $attribute->id }}" class="form-check-label">
                            {{ $attribute->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
