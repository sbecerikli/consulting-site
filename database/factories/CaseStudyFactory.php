<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaseStudy>
 */
class CaseStudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(4);
        $start = $this->faker->dateTimeBetween('-1 year', '-2 months');
        $completed = $this->faker->boolean(70) ? $this->faker->dateTimeBetween($start, 'now') : null;
        $published = (bool)($completed && $this->faker->boolean(90));

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'client_name' => $this->faker->company(),
            'summary' => $this->faker->optional()->sentence(18),
            'body' => $this->faker->paragraphs(5, true),
            'results' => $this->faker->optional()->paragraphs(2, true),
            'started_at' => $start,
            'completed_at' => $completed,
            'featured_image' => null,
            'is_published' => $published,
            'published_at' => $published ? $this->faker->dateTimeBetween($completed ?: $start, 'now') : null,
        ];
    }
}
