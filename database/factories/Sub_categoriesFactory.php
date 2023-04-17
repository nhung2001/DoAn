<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sub_Categories>
 */
class Sub_categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $CategoriesId = \App\Models\Categories::pluck('id');
        return [
            'name' => $this->faker->text($max=8),
            'categories_id' => $CategoriesId->random(),
        ];
    }
}
