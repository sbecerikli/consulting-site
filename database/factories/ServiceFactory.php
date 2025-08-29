<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->optional()->sentence(12),
            'body' => $this->faker->optional()->paragraphs(3, true),
            'icon' => null,
            'hero_image' => null,
            'is_published' => $published = $this->faker->boolean(85),
            'published_at' => $published ? $this->faker->dateTimeBetween('-60 days', 'now') : null,
        ];
    }
}
