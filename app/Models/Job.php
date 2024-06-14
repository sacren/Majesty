<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary', 'employer_id'];

    /**
     * Wrapper of find() method, but return 404 if job doesn't exist.
     *
     * @return job of id.
     */
    public static function found($id): self
    {
        $job = self::find($id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }

    /**
     * Build a relationship from Job to Employer.
     *
     * @return Relation.
     */
    public function employer(): Relation
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * Build many-to-many relationship from Job to Tag.
     *
     * @return Relation.
     */
    public function tags(): Relation
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
