<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    /**
     * Build Employer HasMany Jobs relationship.
     *
     * @return HasMany.
     */
    public function jobs(): HasMany
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
