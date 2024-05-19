<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    private static $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ];

    public static function get(): array
    {
        return self::$jobs;
    }

    public static function find($id): array
    {
        $job = Arr::first(self::get(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
