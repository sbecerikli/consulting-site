<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(5);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->optional()->sentence(20),
            'body' => $this->faker->paragraphs(6, true),
            'cover_image' => null,
            'reading_time_minutes' => $this->faker->numberBetween(3, 10),
            'is_published' => $published = $this->faker->boolean(80),
            'published_at' => $published ? $this->faker->dateTimeBetween('-90 days', 'now') : null,
        ];
    }
}
