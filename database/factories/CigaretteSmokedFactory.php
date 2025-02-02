<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CigaretteSmoked>
 */
class CigaretteSmokedFactory extends Factory
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
            'cigarettes_count' => $this->faker->numberBetween(1, 20),
            'cost' => $this->faker->randomFloat(2, 1, 10),  // Random cost between $1.00 and $10.00
            'smoked_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
