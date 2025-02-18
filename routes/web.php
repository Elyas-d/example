<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs',[
        'job'=>[
            [
                'id'=>1,
                'title'=>'director',
                'salary'=>'$60,000'
            ],
            [
                'id'=>2,
                'title'=>'programer',
                'salary'=>'$10,000'
            ],
            [
                'id'=>3,
                'title'=>'teacher',
                'salary'=>'$40,000'
            ]
        ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $job=[
        [
            'id'=>1,
            'title'=>'director',
            'salary'=>'$60,000'
        ],
        [
            'id'=>2,
            'title'=>'programer',
            'salary'=>'$10,000'
        ],
        [
            'id'=>3,
            'title'=>'teacher',
            'salary'=>'$40,000'
        ]
        ];
    $job=Arr::first($job,fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
