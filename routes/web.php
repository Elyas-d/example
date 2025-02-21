<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function ()  {
    return view('jobs', [
        'job' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::all();
    $job = Arr::first($job, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
