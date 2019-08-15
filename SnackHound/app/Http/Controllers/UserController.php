<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        // check if all the data was filled
        if (!isset($request->email) || !isset($request->password)) return view("login", ['errorSignIn' => "inform email and password!", 'request' => $request]);
        // retrieve the user
        $user = User::where("email", $request->email)->get();
        // is not exister returns
        if (count($user) == 0) return view("login", ['errorSignIn' => "email not registered!", 'request' => $request]);
        $user = $user[0]; // take the user from the array to be easy to retrieve the columns
        // check password
        if (password_verify($request->password, $user->hash_password)){
            // if user blocked returns
            if ($user->user_status == 1) return view("login", ['errorSignIn' => "User blocked!", 'request' => $request]);
            // save the user info in the session
            SaveSessionInfo($user);
            // redirect to a new page
            if (isset($request->redirect)){
                return redirect()->route($request->redirect);
            }else{
                return redirect()->route('/');
            }
        }else{
            // if password not match returns
            return view("login", ['errorSignIn' => "password not match!", 'request' => $request]);
        }
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

    public function signout(){
        Session::flush();
        return view('index');
    }

    // How take info from session
    //if (Session::has('email')) {
    //    echo Session::get('email');
    //}

    private function SaveSessionInfo($user){
        Session::put('id_user', $user->id_user);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        Session::put('user_type', $user->user_type);
    }
}
