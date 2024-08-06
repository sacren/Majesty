<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * Build Job BelongsTo to Employer relationship.
     *
     * @return BelongsTo.
     */
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * Build many-to-many relationship from Job to Tag.
     *
     * @return BelongsToMany.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }

    /**
     * List the tag associated with the job or create it if it doesn't exist.
     *
     * @return void.
     */
    public function hasTag(string $tagName): void
    {
        $tag = Tag::firstOrCreate([
            'name' => $tagName,
        ]);

        $this->tags()->attach($tag->id);
    }
}
