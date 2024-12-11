<?php

namespace App\Livewire\Frontend\Helper;

use Livewire\Component;

class DoubleRangeSlider extends Component
{
    public $minValue;
    public $maxValue;
    public $currentMinValue;
    public $currentMaxValue;
    public $step;
    public $minLimit;
    public $maxLimit;
    public $sliderType; // Typ des Sliders ("price" oder "size")

    protected $listeners = [];

    public function mount($minValue, $maxValue, $minLimit, $maxLimit, $step, $sliderType)
    {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->currentMinValue = $minValue;
        $this->currentMaxValue = $maxValue;
        $this->minLimit = $minLimit;
        $this->maxLimit = $maxLimit;
        $this->step = $step;
        $this->sliderType = $sliderType;

        $this->listeners = [
            "set{$this->sliderType}RangeValues" => 'setRangeValues',
        ];
    }

    public function updatedCurrentMinValue($value)
    {
        $this->currentMinValue = max($this->minLimit, min($value, $this->currentMaxValue - $this->step));
        $this->dispatch('updateSliderValues', $this->sliderType, $this->currentMinValue, $this->currentMaxValue);
    }

    public function updatedCurrentMaxValue($value)
    {
        $this->currentMaxValue = min($this->maxLimit, max($value, $this->currentMinValue + $this->step));
        $this->dispatch('updateSliderValues', $this->sliderType, $this->currentMinValue, $this->currentMaxValue);
    }

    public function setRangeValues($min, $max)
    {
        $this->currentMinValue = max($this->minLimit, min($min, $this->maxLimit));
        $this->currentMaxValue = min($this->maxLimit, max($max, $this->minLimit));
        $this->dispatch('updateSliderValues', $this->sliderType, $this->currentMinValue, $this->currentMaxValue);
    }

    public function render()
    {
        return view('livewire.frontend.helper.double-range-slider', [
            'initialMinValue' => $this->currentMinValue,
            'initialMaxValue' => $this->currentMaxValue,
        ]);
    }
}
