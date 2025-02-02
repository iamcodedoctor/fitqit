<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::inRandomOrder()->first()->id,
            'exercise_type' => $this->faker->randomElement(['Running', 'Cycling', 'Yoga', 'Swimming', 'Weightlifting']), // Random exercise type
            'duration' => $this->faker->numberBetween(30, 120), // Duration in minutes
            'calories_burned' => $this->faker->numberBetween(150, 600), // Calories burned
            'logged_at' => $this->faker->dateTimeThisYear(), // Log time within the year
        ];
    }
}
