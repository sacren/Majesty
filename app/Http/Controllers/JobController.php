<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     */
    public function index()
    {
        $job = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $job,
        ]);
    }

    /**
     * Show the form for creating a new job.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created job in storage.
     */
    public function store()
    {
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

        Mail::to('bWqgK@example.com')
            ->send(new JobPosted());

        return redirect('/jobs');
    }

    /**
     * Display the specified job.
     */
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified job.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    /**
     * Update the specified job in storage.
     */
    public function update(Job $job)
    {
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
    }

    /**
     * Remove the specified job from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
