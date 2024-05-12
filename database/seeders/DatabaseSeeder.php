<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            "name" => "Zildjian Vito 2",
            "username" => "zildjianvito",
            "email" => "zildjianvito.s@gmail.com",
            "password" => Hash::make("password")
        ]);


        User::factory()->count(20)->create();
        Post::factory()->count(20)->create();

        Category::create([
            "name" => "Web Development",
            "slug" => "web-development",
        ]);
        Category::create([
            "name" => "Programming",
            "slug" => "programming",
        ]);



        // $this->call(
        //     [
        //         // UserSeeder::class,
        //         PostSeeder::class,
        //     ]
        // );
    }
}
