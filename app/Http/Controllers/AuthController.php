<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){

        //Validate
        $fields = $request->validate([
            "username" => ["required", "max:255"],
            "email" => ["required", "email", "max:255", "unique:users"],
            "password" => ["required", "min:3", "confirmed"],
        ]);

        //Register
        $user = User::create($fields);

        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route("home");

    }

    public function login(Request $request){

        $fields = $request->validate([
            "email" => ["required", "email", "max:255"],
            "password" => ["required", "min:3"],
        ]);

        //Try to login the user
        if(Auth::attempt($fields, $request->rememberme)){
            return redirect()->intended();
        }
        else {
            return back()->withErrors([
                "failed" => "The provided credentials do not match
                our records",

            ]);
        }

    }
}
