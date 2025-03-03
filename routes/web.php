<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->cursorPaginate(10);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


Route::get('/job/create', function () {
    return view('jobs.create');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) { 
    $job = Job::find($id); 
    if (! $job) {
        abort(404);
    }
    return view('jobs.show', ['job' => $job]);
});
