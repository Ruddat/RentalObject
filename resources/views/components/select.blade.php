{{-- Laravel Livewire Select Component --}}
@props([
    'disabled' => false,
    'loadJS' => false,
    'defaultValue' => null,
    'selected' => null,
    'class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'
])

<select
    {{-- Load the function if loadJS attribute is set to true --}}
    @if ($loadJS === 'true' || $loadJS)
    x-data="{
        setDefaultOption() {
            const selectElements = document.querySelectorAll('select[data-default-value]');
            selectElements.forEach(select => {
                // Get the default value from the data attribute
                const defaultValue = select.getAttribute('data-default-value');

                Array.from(select.attributes).forEach(attr => {
                    if (attr.name.startsWith('wire:')) {
                        // Use Livewire's @this.get() to check if the model has a value
                        if (!@this.get(`${attr.value}`)) {
                            if (defaultValue) {
                                @this.set(`${attr.value}`, defaultValue);
                                select.value = defaultValue; // Set the select element's value to defaultValue
                            } else {
                                // Loop through options to find the one with the 'selected' attribute
                                let defaultOption = Array.from(select.options).find(option => option.hasAttribute('selected'));
                                if (defaultOption && defaultOption.value) {
                                    @this.set(`${attr.value}`, defaultOption.value);
                                    select.value = defaultOption.value; // Set the select element's value to the default option
                                } else {
                                    // If select.value is not empty, use it as the default
                                    @this.set(`${attr.value}`, select.value);
                                }
                            }
                        }
                    }
                });
            });
        }
    }"
    x-init="setDefaultOption()"
    @endif
    {{ $disabled ? 'disabled' : '' }}
    data-default-value="{{ $defaultValue ?? $selected }}"
    {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</select>
