<div>
    <div class="position-relative range-slider-wrapper" id="doubleRangeSlider">
        <!-- Track -->
        <div class="slider-range-track bg-primary position-absolute" id="sliderTrack"></div>

        <!-- Left Thumb -->
        <div class="slider-thumb left-thumb position-absolute" id="leftThumb"></div>

        <!-- Right Thumb -->
        <div class="slider-thumb right-thumb position-absolute" id="rightThumb"></div>
    </div>

    <style>
        .range-slider-wrapper {
            position: relative;
            height: 30px;
            width: 100%;
            touch-action: none;
        }

        .slider-range-track {
            height: 6px;
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            border-radius: 2px;
            background-color: #ddd;
        }

        .slider-thumb {
            width: 16px;
            height: 16px;
            background-color: #007bff;
            border: 2px solid white;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        .left-thumb {
            left: 0;
        }

        .right-thumb {
            right: 0;
        }
    </style>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sliderWrapper = document.getElementById('doubleRangeSlider');
        const sliderTrack = document.getElementById('sliderTrack');
        const leftThumb = document.getElementById('leftThumb');
        const rightThumb = document.getElementById('rightThumb');

        const minValue = @js($minLimit);
        const maxValue = @js($maxLimit);
        const step = @js($step);

        let currentMinValue = @js($currentMinValue);
        let currentMaxValue = @js($currentMaxValue);

        function getValueFromPosition(position) {
            const sliderWidth = sliderWrapper.offsetWidth;
            const relativePosition = Math.max(0, Math.min(position, sliderWidth));
            const value = (relativePosition / sliderWidth) * (maxValue - minValue) + minValue;
            return Math.round(value / step) * step;
        }

        function getPositionFromValue(value) {
            const sliderWidth = sliderWrapper.offsetWidth;
            return ((value - minValue) / (maxValue - minValue)) * sliderWidth;
        }

        function updateSlider() {
            leftThumb.style.left = `${getPositionFromValue(currentMinValue)}px`;
            rightThumb.style.left = `${getPositionFromValue(currentMaxValue)}px`;

            sliderTrack.style.left = `${getPositionFromValue(currentMinValue)}px`;
            sliderTrack.style.width = `${getPositionFromValue(currentMaxValue) - getPositionFromValue(currentMinValue)}px`;
        }

        let activeThumb = null;
        let startX = 0;
        let startValue = 0;

        function handleMouseDown(event, thumb) {
            activeThumb = thumb;
            startX = event.clientX;
            startValue = (thumb === leftThumb) ? currentMinValue : currentMaxValue;
            document.addEventListener('mousemove', handleMouseMove, { passive: true });
            document.addEventListener('mouseup', handleMouseUp, { once: true });
        }

        function handleMouseMove(event) {
            const deltaX = event.clientX - startX;
            const newValue = getValueFromPosition(getPositionFromValue(startValue) + deltaX);

            if (activeThumb === leftThumb) {
                currentMinValue = Math.max(minValue, Math.min(newValue, currentMaxValue - step));
            } else {
                currentMaxValue = Math.min(maxValue, Math.max(newValue, currentMinValue + step));
            }

            updateSlider();
        }

        function handleMouseUp() {
            @this.set('currentMinValue', currentMinValue, true);
            @this.set('currentMaxValue', currentMaxValue, true);
            activeThumb = null;
        }

        leftThumb.addEventListener('mousedown', (event) => handleMouseDown(event, leftThumb));
        rightThumb.addEventListener('mousedown', (event) => handleMouseDown(event, rightThumb));

        setTimeout(() => updateSlider(), 50);

        Livewire.on('updateSliderValues', (min, max) => {
            currentMinValue = min;
            currentMaxValue = max;
            updateSlider();
        });
    });
</script>
