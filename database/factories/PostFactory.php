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
            "category_id" => 1,
            "user_id" => 2,
            "title" => fake()->text(10),
            "slug" => "judul-" . Str::random(5),
            "author" => Str::random(10),
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, officiis.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illum, itaque mollitia animi a numquam voluptatibus nulla deleniti delectus odit? Officiis, atque aliquam temporibus natus asperiores ab cumque harum dolore!w",
        ];
    }
}
