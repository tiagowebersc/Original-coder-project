@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/password.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound - Reset you password')

@section('content')
<div class="background">
    <section class="frame">
        <article>
            <h2 class="center">Reset your password</h2>
            <form action="/reset_password" method="post">
                @csrf
                <label class=" bold hideSmallScreen" for="email">Email:</label>
                <input class="input100" type="email" name="email" id="email" readonly @isset($email) value={{$email}} @endisset>
                <label class="bold hideSmallScreen" for="password">New password:</label>
                <input class="input100" type="password" name="password" id="password" placeholder="New password">
                <label class="bold hideSmallScreen" for="confirmPassword">Confirm Password:</label>
                <input class="input100" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">

                <div class="center">
                    <button type="submit">Reset password</button>
                </div>
                @isset($error)
                <p class="error center">{{$error}}</p>
                @endisset
            </form>
        </article>
    </section>
</div>
@endsection
