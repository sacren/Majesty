<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Tag extends Model
{
    use HasFactory;

    /**
     * Build many-to-many relationship from Tag to Job.
     *
     * @return Relation.
     */
    public function jobs(): Relation
    {
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }
}
