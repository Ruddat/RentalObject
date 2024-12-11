<?php

namespace App\Livewire\Frontend\Helper;

use Livewire\Component;

class RangeSlider extends Component
{

    public $minValue = 0;
    public $maxValue = 100;
    public $currentValue = 50;


    public function updatedCurrentValue($value)
    {

        if ($value > $this->maxValue) {
            $this->currentValue = $this->maxValue;
            \Log::info("Range-Slider-Wert aktualisiert: $value");
        }

        if ($value < $this->minValue) {
            $this->currentValue = $this->minValue;
        }
    }

    public function render()
    {
        return view('livewire.frontend.helper.range-slider');
    }
}
