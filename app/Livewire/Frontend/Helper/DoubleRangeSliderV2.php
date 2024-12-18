<?php

namespace App\Livewire\Frontend\Helper;

use Livewire\Component;

class DoubleRangeSliderV2 extends Component
{
    public $minValue;
    public $maxValue;
    public $minLimit;
    public $maxLimit;
    public $step;
    public $sliderType; // z. B. "price"

    public function mount($minValue, $maxValue, $minLimit, $maxLimit, $step, $sliderType)
    {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->minLimit = $minLimit;
        $this->maxLimit = $maxLimit;
        $this->step = $step;
        $this->sliderType = $sliderType;
    }

    public function updateValues($min, $max)
    {
        $this->minValue = $min;
        $this->maxValue = $max;

        // Optional: Event für andere Komponenten oder Backend-Logik
        $this->emit('sliderValuesUpdated', $this->sliderType, $min, $max);
    }

    public function render()
    {
        return view('livewire.frontend.helper.double-range-slider-v2');
    }
}
