<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ["title", "author", "image", "excerpt", "body", "slug", "category_id", "user_id"];

    protected $with = ["user", "category"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function scopeFilter(Builder $query, array $filters): void
    {

        $query->when($filters["search"] ?? false, function ($query, $searchValue) {
            return $query->where("title", "like", "%" . $searchValue . "%")
                ->orWhere("body", "like", "%" . $searchValue . "%");
        });

        $query->when($filters["category"] ?? false, function ($query, $categoryValue) {
            return $query->whereHas("category", function ($query) use ($categoryValue) {
                return $query->where("slug", $categoryValue);
            });
        });
        $query->when($filters["user"] ?? false, function ($query, $userValue) {
            return $query->whereHas("user", function ($query) use ($userValue) {
                return $query->where("username", $userValue);
            });
        });
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
