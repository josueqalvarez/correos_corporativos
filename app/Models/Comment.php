<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $fillable = [
        'blog_id',
        'user_id',
        'parent_comment_id',
        'content',
        'created_at',
        'updated_at',
        
    ];

    /** @return BelongsTo<Blog, Comment> */
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    /** @return BelongsTo<User, Comment> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return BelongsTo<Comment, Comment> */
    public function parentComment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    /** @return HasMany<Comment, Comment> */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }
}
