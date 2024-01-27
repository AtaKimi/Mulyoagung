<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    public function commentable(): MorphTo {
        return $this->morphTo(__FUNCTION__, 'commentable_type', 'commentable_id');
    }

    public function comments():MorphMany {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
