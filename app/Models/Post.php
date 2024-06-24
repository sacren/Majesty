<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Post extends Model
{
    use HasFactory;

    /**
     * Build a one-to-many relationship from Post to Comment.
     *
     * @return Relation.
     */
    public function comments(): Relation
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Build a many-to-one relationship from Post to User.
     *
     * @return Relation.
     */
    public function user(): Relation
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Build a many-to-many relationship from Post to Tag.
     *
     * @return Relation.
     */
    public function tags(): Relation
    {
        return $this->belongsToMany(Tag::class);
    }
}
