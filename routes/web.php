<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::get(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [ 'job' => Job::find($id) ]);
});

Route::get('/contact', function () {
    return view('contact');
});
