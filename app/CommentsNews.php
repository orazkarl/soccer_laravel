<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentsNews extends Model
{
    protected $fillable = ['author_id', 'news_id', 'text'];
    public $timestamps = false;

    public function author_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
