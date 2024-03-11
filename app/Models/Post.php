<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "author", "excerpt", "body", "slug", "category_id", "user_id"];

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

        if (isset($filters["search"])) {
            $query->where("title", "like", "%" . $filters["search"] . "%")
                ->orWhere("body", "like", "%" . $filters["search"] . "%");
        }
    }
}
