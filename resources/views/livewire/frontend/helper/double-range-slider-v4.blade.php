<div>
    <!-- Slider -->
    <div
        wire:ignore
        id="doubleRangeSlider"
        x-data="{
            min: @entangle('currentMinValue'),
            max: @entangle('currentMaxValue'),
        }"
        x-init="
            const slider = noUiSlider.create($refs.slider, {
                start: [min, max],
                connect: true,
                range: {
                    min: {{ $minLimit }},
                    max: {{ $maxLimit }}
                },
                step: {{ $step }}
            });

            slider.on('update', (values) => {
                min = parseFloat(values[0]);
                max = parseFloat(values[1]);
                $dispatch('slider-values-updated', { min, max });
            });

            $watch('min', (value) => slider.set([value, null]));
            $watch('max', (value) => slider.set([null, value]));
        "
    >
        <div x-ref="slider"></div>
    </div>

    <!-- Slider Values -->
    <div class="d-flex justify-content-between mt-3">
        <span>Min: {{ $currentMinValue }}</span>
        <span>Max: {{ $currentMaxValue }}</span>
    </div>
</div>

<!-- Import noUiSlider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
