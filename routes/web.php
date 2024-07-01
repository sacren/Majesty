<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $job,
    ]);
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => [
            'required',
            'string',
            'unique:job_listings,title',
            'max:255',
            'min:3',
        ],
        'salary' => [
            'required',
            'string',
            'max:255',
        ],
    ]);

    Job::factory()->create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => $job,
    ]);
});

// Edit
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', [
        'job' => $job,
    ]);
});

// Update
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => [
            'required',
            'string',
            'unique:job_listings,title',
            'max:255',
            'min:3'
        ],
        'salary' => [
            'required',
            'string',
            'max:255',
        ],
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
