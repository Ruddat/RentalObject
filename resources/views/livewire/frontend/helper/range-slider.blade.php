<div>
    <label for="rangeSlider" class="form-label">Value: <span id="rangeValue">{{ $currentValue }}</span></label>
    <input
    type="range"
    class="form-range"
    id="rangeSlider"
    wire:model.lazy="currentValue"
    min="{{ $minValue }}"
    max="{{ $maxValue }}"
    step="5"
>
</div>

<script>
    document.addEventListener('livewire:load', () => {
        const slider = document.getElementById('rangeSlider');
        const rangeValue = document.getElementById('rangeValue');

        slider.addEventListener('input', () => {
            rangeValue.textContent = slider.value;
        });
    });
</script>
