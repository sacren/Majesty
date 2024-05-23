<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Job extends Model
{
    protected $table = 'job_listings';

    public static function get(): Collection
    {
        return self::all();
    }

    public static function found($id): self
    {
        $job = self::find($id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
