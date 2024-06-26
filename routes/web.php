<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $job,
    ]);
});

Route::post('/jobs', function () {
    dd(request()->all());
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => Job::found($id),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
