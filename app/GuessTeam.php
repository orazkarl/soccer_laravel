<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GuessTeam extends Model
{
    protected $fillable = ['id', 'variant'];
    public $timestamps = false;

//        public function author_id(): BelongsTo
//        {
//            return $this->belongsTo(User::class, 'author_id');
//        }
}
