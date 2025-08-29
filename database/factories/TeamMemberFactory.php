<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->jobTitle(),
            'photo' => null,
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'linkedin_url' => $this->faker->optional()->url(),
            'twitter_url' => $this->faker->optional()->url(),
            'github_url' => $this->faker->optional()->url(),
            'display_order' => $this->faker->numberBetween(0, 50),
            'is_active' => true,
        ];
    }
}
