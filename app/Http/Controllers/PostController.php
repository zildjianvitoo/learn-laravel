<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = "All Posts";

        if ($request->query("category")) {
            $category = Category::firstWhere("slug", $request->query("category"));
            $title = "Category: " . $category->name;
        }

        if ($request->query("user")) {
            $user = User::firstWhere("username", $request->query("user"));
            $title = "Author: " . $user->name;
        }

        return view("posts.index", [
            "title" => $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(["search", "category", "user"]))->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view("posts.post", ["title" => $post->title, "active" => "single-post", "post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
