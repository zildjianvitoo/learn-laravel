<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => mt_rand(1, 2),
            "user_id" => mt_rand(1, 5),

            "title" => fake()->text(10),
            "slug" => fake()->slug(2),
            "author" => fake()->name(),
            "excerpt" => fake()->sentence(mt_rand(6, 10)),
            "body" => fake()->paragraph(mt_rand(5, 8)),
        ];
    }
}
