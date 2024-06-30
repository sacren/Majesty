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
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
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
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => Job::found($id),
    ]);
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'job' => Job::found($id),
    ]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::found($id)->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $id);
});

Route::get('/contact', function () {
    return view('contact');
});
