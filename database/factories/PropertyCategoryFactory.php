<?php

namespace Database\Factories;

use App\Models\PropertyType;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyCategory>
 */
class PropertyCategoryFactory extends Factory
{
    protected $model = PropertyCategory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Beispiel: zufälliger Name für die Kategorie
            'property_type_id' => PropertyType::factory(), // Automatisch verknüpfen mit PropertyType
        ];
    }
}
