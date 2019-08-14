@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}" />
@endsection

@section('title', 'SnackHound - Login / Signin')

@section('content')
<div class="background">
    <section class="login">
        <div class='loginSignin'>
            <article>
                <h2>Sign Up</h2>
                <p>Create your account here. It's completely free and just takes a minute</p>
                <form action="/login" method="post">
                    @csrf
                    <div>
                        <input type="radio" name="userType" id="curtomer" value="0">
                        <label for="curtomer">Personal Account</label>
                        <input type="radio" name="userType" id="foodtruck" value="1">
                        <label for="foodtruck">Business Account</label>
                    </div>
                    <div class="flex">
                        <div class="width50">
                            <label for="firstName">First Name:</label>
                            <input class="input100" type="text" name="firstName" id="firstName">
                        </div>
                        <div class="width50">
                            <label for="lastName">Last Name:</label>
                            <input class="input100" type="text" name="lastName" id="lastName">
                        </div>
                    </div>
                    <label for="email">Email:</label>
                    <input class="input100" type="email" name="email" id="email">
                    <label for="password">Password:</label>
                    <input class="input100" type="password" name="password" id="password">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input class="input100" type="password" name="confirmPassword" id="confirmPassword">
                    <div>
                        <input type="checkbox" name="termsOfUse" value="T"> I accept the terms of use & the privacy policy
                    </div>
                </form>
            </article>
            <div class="verticalLine"></div>
            <article>
                <h2>Login Up</h2>
                <p>Why be old fashioned? Sign in with through Facebook or Google:</p>
                <form action="/login" method="post">
                    @csrf
                </form>
            </article>
        </div>
        <p>* Do you own a foodtruck and want to work with us? You can find more information <a href="#">here</a></p>
    </section>
</div>

@endsection
