<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public static function found($id): self
    {
        $job = self::find($id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
