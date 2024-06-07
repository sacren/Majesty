<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Comment extends Model
{
    use HasFactory;

    /**
     * Build a many-to-one relationship from Comment to Post.
     *
     * @return Relation.
     */
    public function post(): Relation
    {
        return $this->belongsTo(Post::class);
    }
}
