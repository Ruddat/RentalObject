<div>
    <div class="slider-wrapper">
        <!-- Slider -->
        <div id="range-slider"></div>
        <!-- Min/Max Werte anzeigen -->
        <div class="slider-values d-flex justify-content-between mt-3">
            <span id="min-value">{{ $minValue }}</span>
            <span id="max-value">{{ $maxValue }}</span>
        </div>
    </div>

    @assets
    <!-- Einbindung von jQuery und jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    @endassets

    <script>
        document.addEventListener('livewire:load', function () {
            const minLimit = @js($minLimit);
            const maxLimit = @js($maxLimit);
            const initialMinValue = @js($minValue);
            const initialMaxValue = @js($maxValue);
            const step = @js($step);

            // Initialisierung des Sliders
            $("#range-slider").slider({
                range: true,
                min: minLimit,
                max: maxLimit,
                values: [initialMinValue, initialMaxValue],
                step: step,
                slide: function (event, ui) {
                    // Werte aktualisieren
                    Livewire.dispatch('updateValues', ui.values[0], ui.values[1]);
                    $("#min-value").text(ui.values[0]);
                    $("#max-value").text(ui.values[1]);
                }
            });

            // Initiale Werte anzeigen
            $("#min-value").text(initialMinValue);
            $("#max-value").text(initialMaxValue);
        });
    </script>


    <style>
        .slider-wrapper {
            width: 100%;
            margin: 20px auto;
        }

        #range-slider {
            margin: 10px 0;
        }

        .slider-values {
            font-size: 16px;
            font-weight: bold;
        }

        .ui-slider .ui-slider-handle {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #007bff;
            border: 2px solid white;
            cursor: pointer;
            z-index: 3;
            position: relative;
        }

        .ui-slider .ui-slider-handle:hover {
            background: #0056b3;
        }

        .ui-slider-range {
            background: #007bff;
        }
    </style>
</div>
