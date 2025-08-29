<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_name' => $this->faker->name(),
            'author_title' => $this->faker->optional()->jobTitle(),
            'company' => $this->faker->optional()->company(),
            'photo' => null,
            'content' => $this->faker->sentences(3, true),
            'rating' => $this->faker->optional()->numberBetween(4, 5),
            'is_published' => true,
        ];
    }
}
