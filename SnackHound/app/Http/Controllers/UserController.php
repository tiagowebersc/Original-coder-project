<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function login()
    {
        //if (Session::has('id_user')) {
        //    return redirect()->route('index');
        //} else {
        //    return view('login');
        //}

        // for the moment to erase the session
        if (Session::has('id_user')) Session::flush();
        
        return view('login', ['form' => 'login']);
    }
    public function signup()
    {
        // for the moment to erase the session
        if (Session::has('id_user')) Session::flush();
        
        return view('login', ['form' => 'signup']);
    }

    public function loginPost(Request $request)
    {
        // check if all the data was filled
        if (!isset($request->email) || !isset($request->password)) return view("login", ['errorSignIn' => "inform email and password!", 'request' => $request, 'form' => 'login']);
        // retrieve the user
        $user = User::where("email", $request->email)->get();
        // is not exister returns
        if (count($user) == 0) return view("login", ['errorSignIn' => "email not registered!", 'request' => $request, 'form' => 'login']);
        $user = $user[0]; // take the user from the array to be easy to retrieve the columns
        // check password
        if (password_verify($request->password, $user->hash_password)){
            // if user blocked returns
            if ($user->user_status == 1) return view("login", ['errorSignIn' => "User blocked!", 'request' => $request, 'form' => 'login']);
            // save the user info in the session
            Self::SaveSessionInfo($user);
            // redirect to a new page
            if (isset($request->redirect)){
                return redirect()->route($request->redirect);
            }else{
                return redirect()->route('index');
            }
        }else{
            // if password not match returns
            return view("login", ['errorSignIn' => "password not match!", 'request' => $request, 'form' => 'login']);
        }
    }

    public function signupPost(Request $request)
    {
        if (!isset($request->userType)) return view("login", ['errorSignUp' => "inform user type!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->firstName)) return view("login", ['errorSignUp' => "inform first name!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->lastName)) return view("login", ['errorSignUp' => "inform last name!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->email)) return view("login", ['errorSignUp' => "inform email!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->password)) return view("login", ['errorSignUp' => "inform password!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->confirmPassword)) return view("login", ['errorSignUp' => "inform password confirmation!", 'request' => $request, 'form' => 'signup']);
        if (!isset($request->termsOfUse)) return view("login", ['errorSignUp' => "you must to accept the terms and conditions!", 'request' => $request, 'form' => 'signup']);
        // check email 
        $user = User::where("email", $request->email)->get();
        if (count($user) > 0) return view("login", ['errorSignUp' => "email already in use!", 'request' => $request, 'form' => 'signup']);
        // check is only valid user type was selected
        if ($request->userType != 0 && $request->userType != 1) return view("login", ['errorSignIn' => "invalid user type!", 'request' => $request, 'form' => 'signup']);
        // check if passwords match
        if ($request->password != $request->confirmPassword) return view("login", ['errorSignUp' => "passwords don't match!", 'request' => $request, 'form' => 'signup']);

        $user = new User();
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->user_type = $request->userType;
        $user->user_status = 0;
        $user->hash_password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();

        // redirect to a new page
        if (isset($request->redirect)){
            return redirect()->route($request->redirect);
        }else{
            return redirect()->route('index');
        }
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
