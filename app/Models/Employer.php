<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

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
}
