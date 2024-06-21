<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->paginate(3);

    return view('jobs', [
        'jobs' => $job,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::found($id),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
