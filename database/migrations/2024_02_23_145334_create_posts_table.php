<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id");
            $table->foreignId("user_id");
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("author");
            $table->string("excerpt");
            $table->text("body");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
// Post::create([
//     "title" => "Judul 4",
//     "user_id" => 1,
//     "category_id" => 2,
//     "slug" => "judul-4",
//     "author" => "Kocak",
//     "excerpt" => "loreman",
//     "body" => "loremannnnn1111"
// ])