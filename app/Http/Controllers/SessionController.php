<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $attributes = request()->validate([
            "email"=> "email|required",
            "password"=> "required|min:8"
        ]);
        
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'password'=>'incorrect email or password'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }
    
    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
