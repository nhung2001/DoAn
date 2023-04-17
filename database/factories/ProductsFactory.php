<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subcategoriesId = \App\Models\Sub_categories::pluck('id');
        return [
            'name' => $this->faker->name(),
            'image' => url(sprintf(
                'avatar/%s.%s',
                $this->faker->uuid(),
                $this->faker->randomElement(['jpg', 'jpeg', 'png'])
            )),
            'price' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'author' => $this->faker->title(),
            'description' => $this->faker->title($max=10),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 500),
            'sub_categories_id' => $subcategoriesId->random(),
        ];
    }
}
