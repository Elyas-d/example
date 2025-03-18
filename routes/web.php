<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);

Route::resource('/jobs',JobController::class);