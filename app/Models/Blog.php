<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'image',
        'published_at',
        'is_published',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {

            $blog->slug = Str::slug($blog->title);

        });
    }

    /** @return BelongsTo<User, Blog> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return HasMany<Comment, Blog> */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
