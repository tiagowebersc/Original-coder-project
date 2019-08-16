@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound - Login / Signin')

@section('content')
<div class="background">
    <section class="login">
        <div class='loginSignin'>
            <article class="articleSignUp <?php if ($form == 'login') echo " hideSmallScreen"; ?>">
                <h2 class="center">Sign Up</h2>
                <p class="hideSmallScreen">Create your account here. It's completely free and just takes a minute</p>
                <form action="/signup" method="post">
                    @csrf
                    <div>
                        <input type="radio" name="userType" id="curtomer" value="0" checked="checked">
                        <label class="smallPadding" for="curtomer">Personal Account</label>
                        <input type="radio" name="userType" id="foodtruck" value="1">
                        <label class="smallPadding" for="foodtruck">Business Account</label>
                    </div>
                    <div class="flex">
                        <div class="width50">
                            <label class="bold hideSmallScreen" for="firstName">First Name:</label>
                            <input class="input100" type="text" name="firstName" id="firstName" placeholder="First name" @isset($request->firstName)
                            value={{$request->firstName}}
                            @endisset
                            >
                        </div>
                        <div class="width50">
                            <label class="bold hideSmallScreen" for="lastName">Last Name:</label>
                            <input class="input100" type="text" name="lastName" id="lastName" placeholder="Last name" @isset($request->lastName)
                            value={{$request->lastName}}
                            @endisset>
                        </div>
                    </div>
                    <label class="bold hideSmallScreen" for="email">Email:</label>
                    <input class="input100" type="email" name="email" id="email" placeholder="Email" @isset($request->email)
                    value={{$request->email}}
                    @endisset>
                    <label class="bold hideSmallScreen" for="password">Password:</label>
                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                    <label class="bold hideSmallScreen" for="confirmPassword">Confirm Password:</label>
                    <input class="input100" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
                    <div>
                        <input type="checkbox" name="termsOfUse" id="termsOfUse" value="T"><label class="smallPadding" for="termsOfUse">I accept the <a href="#">terms of use</a> & the <a href="#">privacy policy</a></label>
                    </div>
                    <div class="center">
                        <button type="submit">Create Account</button>
                    </div>
                    @isset($errorSignUp)
                    <p class="error center">{{$errorSignUp}}</p>
                    @endisset
                </form>
            </article>
            <div class="verticalLine"></div>
            <article class="articleSignIn <?php if ($form == 'signup') echo " hideSmallScreen"; ?>">
                <h2 class="center">Sign In</h2>
                <p class="hideSmallScreen">Why be old fashioned? Sign in with through Facebook or Google:</p>
                <form action="/login" method="post">
                    @csrf
                    <label class="bold hideSmallScreen" for="email">Email:</label>
                    <input class="input100" type="email" name="email" id="email" placeholder="Email" @isset($request->email)
                    value={{$request->email}}
                    @endisset>
                    <label class="bold hideSmallScreen" for="passwordLogin">Password:</label>
                    <input class="input100" type="password" name="password" id="passwordLogin" placeholder="Password">
                    <div class="center">
                        <button type="submit">Sign In</button>
                        <a href="/forgot_password">
                            <p>Forgot your password?</p>
                        </a>
                    </div>
                    @isset($errorSignIn)
                    <p class="error center">{{$errorSignIn}}</p>
                    @endisset
                </form>
            </article>
        </div>
        <p class="hideSmallScreen">* Do you own a foodtruck and want to work with us? You can find more information <a href="#">here</a></p>
    </section>
</div>

@endsection
