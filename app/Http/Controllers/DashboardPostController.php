<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            "dashboard.posts.index",
            [
                "title" => "Utama",
                "posts" => Post::where("user_id", auth()->user()->id)->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.posts.create", [
            "title" => "Create New Post",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            "title" => "required|min:5|max:255",
            "slug" => "required|min:5|max:255|unique:posts",
            "category" => "required",
            "description" => "required|min:20",
        ]);

        Post::create([
            "title" => $validated["title"],
            "slug" => $validated["slug"],
            "author" => Auth::user()->name,
            "excerpt" => Str::excerpt(strip_tags($validated["description"])),
            "body" => $validated["description"],
            "category_id" => (int)$validated["category"],
            "user_id" => Auth::user()->id,
        ]);

        return redirect("/dashboard/posts")->with("success", "New post has been added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view(
            "dashboard.posts.post",
            [
                "title" => $post->title,
                "post" => $post
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("dashboard.posts.edit", [
            "title" => "Edit $post->title",
            "post" => $post,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            "title" => "required|min:5|max:255",
            "category" => "required",
            "description" => "required|min:20",
        ]);

        $post = Post::find($post->id);
        $post->update([
            "title" => $validated["title"],
            "excerpt" => Str::excerpt(strip_tags($validated["description"])),
            "body" => $validated["description"],
            "category_id" => (int)$validated["category"],
        ]);

        return redirect("/dashboard/posts")->with("success", "Berhasil update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post = Post::firstWhere("slug", $post->slug);
        $post->delete();
        return redirect("/dashboard/posts");
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(["slug" => $slug]);
    }
}
