<?php

namespace Database\Factories;

use App\Models\ObjProperties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ObjProperties>
 */
class ObjPropertiesFactory extends Factory
{
    protected $model = ObjProperties::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), // Ein zufälliger Benutzer
            'user_type' => $this->faker->randomElement(['privat', 'gewerblich']),
            'title' => $this->faker->sentence(),
            'property_type' => \App\Models\PropertyType::factory(),
            'category' => \App\Models\PropertyCategory::factory(),
            'transaction_type' => $this->faker->randomElement(['verkaufen', 'vermieten']),
            'looking_for_tenant' => $this->faker->boolean(),
            'country' => $this->faker->country(),
            'street' => $this->faker->streetAddress(),
            'zip' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'contact_details' => $this->faker->randomElement(['none', 'name_phone', 'full_address']),
            'ad_number' => $this->faker->unique()->numerify('AD###'),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
