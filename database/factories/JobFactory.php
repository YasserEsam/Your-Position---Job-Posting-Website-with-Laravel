<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomFloat(2, 50000, 100000),
            'location' => $this->faker->randomElement(['remote', 'on-site', 'hybrid']),
            'schedule' => $this->faker->randomElement(['full-time', 'part-time']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
        ];
    }
}
