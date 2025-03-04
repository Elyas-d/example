<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('jobs')->group(function () {

    Route::get('/', function ()  {
        $jobs = Job::with('employer')->latest()->cursorPaginate(10);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    });

    Route::get('/create', function () {
        return view('jobs.create');
    });

    Route::get('/{id}', function ($id) { 
        $job = Job::find($id); 
        if (! $job) {
            abort(404);
        }
        return view('jobs.show', ['job' => $job]);
    });

    Route::post('/', function () {
        
        request()->validate([
            'title'=> ['required', 'min:3'],
            'salary'=> ['required']
        ]);

        Job::create([
            'title'=> request('title'),
            'salary'=> request('salary'),
            'employer_id'=> 1
        ]);
        return redirect('/jobs');
    });
});