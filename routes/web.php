<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

class Job
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
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::get(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::get(), fn($job) => $job['id'] == $id);

    return view('job', [ 'job' => $job ]);
});

Route::get('/contact', function () {
    return view('contact');
});
