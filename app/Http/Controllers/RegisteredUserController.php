<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class RegisteredUserController extends Controller
{
    public function store(User $user){
        request()->validate([
            "email"=> "email","required",
            "name"=>"",
            "password"=> "",
        ]);
    }
    public function create(){
        return view('auth.register');
    }
}
