<?php

namespace App\Models;



class Blog
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Vito",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium officiis quas? Totam, hic iure."
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Pesal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium officiis quas? Totam, hic iure."
        ],
        [
            "title" => "Judul 3",
            "slug" => "judul-3",
            "author" => "Saby",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium officiis quas? Totam, hic iure."
        ]
    ];

    public static function getAllPosts()
    {

        return collect(self::$blog_posts);
    }

    public static function getPostBySlug($slug)
    {
        return static::getAllPosts()->firstWhere("slug", $slug);
    }
}
