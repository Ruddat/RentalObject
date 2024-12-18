<?php

namespace App\Livewire\Frontend\Helper;

use Livewire\Component;

class DoubleRangeSliderV4 extends Component
{
    public $minValue;
    public $maxValue;
    public $currentMinValue;
    public $currentMaxValue;
    public $minLimit;
    public $maxLimit;
    public $step;

    public function mount($minValue, $maxValue, $minLimit, $maxLimit, $step)
    {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->currentMinValue = $minValue;
        $this->currentMaxValue = $maxValue;
        $this->minLimit = $minLimit;
        $this->maxLimit = $maxLimit;
        $this->step = $step;
    }

    public function render()
    {
        return view('livewire.frontend.helper.double-range-slider-v4');
    }
}
