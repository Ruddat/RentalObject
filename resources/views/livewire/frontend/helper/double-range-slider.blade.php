<div>
    <div class="position-relative range-slider-wrapper">
        <!-- Min Slider -->
        <input type="range"
               class="form-range range-input"
               id="minRange"
               min="{{ $minLimit }}"
               max="{{ $maxLimit }}"
               step="{{ $step }}"
               wire:model.lazy="currentMinValue"
               value="{{ $initialMinValue }}">

        <!-- Max Slider -->
        <input type="range"
               class="form-range range-input"
               id="maxRange"
               min="{{ $minLimit }}"
               max="{{ $maxLimit }}"
               step="{{ $step }}"
               wire:model.lazy="currentMaxValue"
               value="{{ $initialMaxValue }}">

        <!-- Track -->
        <div class="slider-range-track bg-primary position-absolute" id="sliderTrack"></div>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <span id="minValue">{{ $currentMinValue }}</span>
        <span id="maxValue">{{ $currentMaxValue }}</span>
    </div>


<style>
/* Wrapper for both sliders */
.range-slider-wrapper {
    position: relative;
    height: 30px; /* Adjust height for better visibility */
}

/* Styling for the track */
.slider-range-track {
    height: 6px;
    z-index: 1; /* Track should appear behind the sliders */
    position: absolute;
    top: 44%;
    transform: translateY(-50%);
    border-radius: 2px;
    background-color: #007bff; /* Track color */
}

/* Styling for the range inputs */
.range-input {
    position: absolute;
    top: 0; /* Align both sliders to the top */
    width: 100%;
    pointer-events: none; /* Prevent direct interaction with the inputs */
    appearance: none;
    background: none;
    margin: 0;
}

/* Custom thumb for the left slider */
.range-input#minRange::-webkit-slider-thumb {
    appearance: none;
    pointer-events: all; /* Allow interaction with the thumb */
    width: 16px;
    height: 16px;
    background-color: #007bff;
    border: 2px solid white;
    border-radius: 50%;
    cursor: pointer;
    z-index: 3;
    position: relative; /* Ensure proper stacking context */
}

/* Custom thumb for the right slider */
.range-input#maxRange::-webkit-slider-thumb {
    appearance: none;
    pointer-events: all; /* Allow interaction with the thumb */
    width: 16px;
    height: 16px;
    background-color: #007bff;
    border: 2px solid white;
    border-radius: 50%;
    cursor: pointer;
    z-index: 4; /* Higher z-index than the left thumb */
    position: relative; /* Ensure proper stacking context */
}

/* For Firefox */
.range-input#minRange::-moz-range-thumb {
    width: 16px;
    height: 16px;
    background-color: #007bff;
    border: 2px solid white;
    border-radius: 50%;
    cursor: pointer;
    z-index: 6;
    position: relative;
}

.range-input#maxRange::-moz-range-thumb {
    width: 16px;
    height: 16px;
    background-color: #007bff;
    border: 2px solid white;
    border-radius: 50%;
    cursor: pointer;
    z-index: 4;
    position: relative;
}


</style>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const minRange = document.getElementById('minRange');
        const maxRange = document.getElementById('maxRange');
        const sliderTrack = document.getElementById('sliderTrack');
        const minValueDisplay = document.getElementById('minValue');
        const maxValueDisplay = document.getElementById('maxValue');

        function updateSlider() {
            const minValue = parseInt(minRange.value);
            const maxValue = parseInt(maxRange.value);

            // Verhindere Überschneidungen
            if (maxValue - minValue < 100) {
                if (this.id === 'minRange') {
                    minRange.value = maxValue - 100;
                } else {
                    maxRange.value = minValue + 100;
                }
            }

            // Berechne Positionen
            const minPercent = ((minRange.value - minRange.min) / (minRange.max - minRange.min)) * 100;
            const maxPercent = ((maxRange.value - maxRange.min) / (maxRange.max - minRange.min)) * 100;

            // Aktualisiere Track-Position
            sliderTrack.style.left = `${minPercent}%`;
            sliderTrack.style.width = `${maxPercent - minPercent}%`;

            // Aktualisiere Werte
            minValueDisplay.textContent = minRange.value;
            maxValueDisplay.textContent = maxRange.value;
        }

        minRange.addEventListener('input', updateSlider);
        maxRange.addEventListener('input', updateSlider);

        // Initiale Positionierung
        updateSlider();
    });
    </script>
