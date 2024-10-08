<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Routes for SPA
Route::get('/spa', function () {
    return Inertia::render('Home');
});
Route::get('/spa/users', function () {
    return Inertia::render('Users', [
        'users' => User::all()
            ->map->only(['id', 'first_name', 'last_name']),
    ]);
});
Route::get('/spa/settings', function () {
    return Inertia::render('Settings');
});

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::get('/welcome', function () {
    return Inertia::render('welcome');
});

Route::get('dispatched', function () {
    $job = Job::with('employer')->latest()->first();
    TranslateJob::dispatch($job);
    return 'Sent!';
});

// Mail Routes...
Route::get('/posted', function () {
    $job = Job::with('employer')->latest()->first();

    Mail::to('bWqgK@example.com')
        ->send(new JobPosted($job));

    return 'Mail sent!';
});

// Jobs Routes...
Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth');

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Authentication Routes...
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Login Routes...
Route::get('/login', [SessionController::class, 'create'])
    ->name('login');

Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
