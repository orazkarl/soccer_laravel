<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentsBlog extends Model
{
    protected $fillable = ['author_id', 'blog_id', 'text'];
    public $timestamps = false;

    public function author_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

}
