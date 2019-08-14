<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        if (!isset($request->email) || !isset($request->password)) return view("login", ['errorSignIn' => "inform email and password!", 'request' => $request]);
        $user = User::where("email", $request->email)->get();
        if (count($user) == 0) return view("login", ['errorSignIn' => "email not registered!", 'request' => $request]);


        return $user;
    }

    public function signupPost(Request $request)
    {
        if (!isset($request->userType)) return view("login", ['errorSignUp' => "inform user type!", 'request' => $request]);
        if (!isset($request->firstName)) return view("login", ['errorSignUp' => "inform first name!", 'request' => $request]);
        if (!isset($request->lastName)) return view("login", ['errorSignUp' => "inform last name!", 'request' => $request]);
        if (!isset($request->email)) return view("login", ['errorSignUp' => "inform email!", 'request' => $request]);
        if (!isset($request->password)) return view("login", ['errorSignUp' => "inform password!", 'request' => $request]);
        if (!isset($request->confirmPassword)) return view("login", ['errorSignUp' => "inform password confirmation!", 'request' => $request]);
        if (!isset($request->termsOfUse)) return view("login", ['errorSignUp' => "you must to accept the terms and conditions!", 'request' => $request]);



        return $request;
    }
}
