<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StressLog>
 */
class StressLevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'stress_level' => $this->faker->numberBetween(1, 10), // Stress level from 1-10
            'logged_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
