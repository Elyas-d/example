<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('employer')->latest()->Paginate(10);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([
            'title'=> ['required', 'min:3'],
            'salary'=> ['required']
        ]);
    
        $job = Job::create([
            'title'=> request('title'),
            'salary'=> request('salary'),
            'employer_id'=> 200 
        ]);

        Mail::to($job->employer->user)->queue( new JobPosted($job) );

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        Auth::user()->can('edit-job', $job);

        return view('jobs.edit',['job'=> $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title'=> ['required', 'min:3'],
            'salary'=> ['required']
        ]);
    
        $job->update([
            'title'=> request('title'),
            'salary'=> request('salary')
        ]);
        $job->save();
    
        return redirect('/jobs/'. $job->id);
    }

    public function destroy(Job $job)
    {
        Job::findOrFail($job->id)->delete();
        return redirect('/jobs');
    }

}
