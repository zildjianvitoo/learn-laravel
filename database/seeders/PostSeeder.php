<?php

namespace Database\Seeders;

use App\Models\Post;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            "category_id" => 1,
            "user_id" => 2,
            "title" => "Judul " . Str::random(10),
            "slug" => "judul-" . Str::random(5),
            "author" => Str::random(10),
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, officiis.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illum, itaque mollitia animi a numquam voluptatibus nulla deleniti delectus odit? Officiis, atque aliquam temporibus natus asperiores ab cumque harum dolore!w",
        ]);
    }
}
