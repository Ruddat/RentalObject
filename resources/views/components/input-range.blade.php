@props(['min', 'max', 'id' => 'range'])

<div x-data="rangeSlider({{ $min }}, {{ $max }})" class="relative w-full">
    <div x-ref="slider" class="slider bg-gray-200 h-2 rounded-full relative">
        <div x-ref="range" class="absolute h-full bg-blue-500"></div>
        <div
            x-ref="minThumb"
            class="slider-thumb absolute top-1/2 -translate-y-1/2 bg-blue-500"
            @mousedown="startDrag('min')"
        ></div>
        <div
            x-ref="maxThumb"
            class="slider-thumb absolute top-1/2 -translate-y-1/2 bg-blue-500"
            @mousedown="startDrag('max')"
        ></div>
    </div>
</div>
