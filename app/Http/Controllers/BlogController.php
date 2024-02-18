<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view("blogs", ["title" => "Blog", "posts" => Blog::all()]);
    }

    public function show(Blog $blog): View
    {
        return view("blogs.blog", ["title" => $blog->title, "post" => $blog]);
    }
}
