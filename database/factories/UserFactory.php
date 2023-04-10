<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->numerify('0#########'),
            'password' => Hash::make(123456789),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => $this->faker->randomElement(array_keys(User::$roles))
        ];
    }
}
