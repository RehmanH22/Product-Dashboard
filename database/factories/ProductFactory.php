<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement($array = array ('Book','CD')),
            'title' => $this->faker->words(4,2),
            'author' => $this->faker->name,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.99, $max = 30),
            'other' => $this->faker->randomElement($array = array ('60','120','180','200','240','300','360','400')),
        ];
    }
}
