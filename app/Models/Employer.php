<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;

    /**
     * Build a relationship from Employer to Job.
     *
     * @return Relation.
     */
    public function jobs(): Relation
    {
        return $this->HasMany(Job::class);
    }

    /**
     * Build Employer BelongsTo User relationship.
     *
     * @return BelongsTo.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
