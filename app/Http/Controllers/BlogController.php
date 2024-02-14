<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view("blog", ["title" => "Blog", "posts" => Blog::getAllPosts()]);
    }

    public function show($slug): View
    {
        return view("posts.post", ["title" => $slug, "post" => Blog::getPostBySlug($slug)]);
    }
}
