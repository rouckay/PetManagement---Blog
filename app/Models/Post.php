<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;


    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function shortBody(): string
    {
        return substr(strip_tags($this->description), 0, 50) . '...';
    }
    public function getImageUlr()
    {
        if (str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }
        return asset('storage/' . $this->thumbnail);
    }
}
