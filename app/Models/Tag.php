<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Build many-to-many relationship from Tag to Job.
     *
     * @return BelongsToMany.
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }

    /**
     * Build many-to-many relationship from Tag to Post.
     *
     * @return BelongsToMany.
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
