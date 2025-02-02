<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmokeFreeLog>
 */
class SmokeFreeLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,  // Use existing users
            'logged_at' => $this->faker->dateTimeThisYear(),
            'money_saved' => $this->faker->randomFloat(2, 5, 20),  // Random value between $5.00 and $20.00
        ];
    }
}
