<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    /**
     * Build Comment belongsTo relationship to Post.
     *
     * @return BelongsTo.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
