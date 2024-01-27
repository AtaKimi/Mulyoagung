<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PublicService extends Model
{
    use HasFactory;

    public function comments(): MorphMany {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
