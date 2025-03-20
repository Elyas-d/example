<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    public function store(){
        $validated_attributes = request()->validate([
            "First_Name"=>"min:3|required",
            "Last_Name"=>"min:3|required",
            "email"=> "email|required",
            "password"=> "required|min:8|confirmed",
        ]);
        
        $user = User::create($validated_attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
    public function create(){
        return view('auth.register');
    }
}
