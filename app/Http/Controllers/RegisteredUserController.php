<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class RegisteredUserController extends Controller
{
    public function store(User $user){
        // request()->validate([
        //     "email"=> "email","required",
        //     "First_Name"=>"","required",
        //     "Last_Name"=>"","required",
        //     "password"=> "min-8","required"
        // ]);
        dd(request()->all());
    }
    public function create(){
        return view('auth.register');
    }
}
