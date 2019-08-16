@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/password.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound - Forgot you password')

@section('content')
<div class="background">
    <section class="frame">
        <article>
            <h2 class="center">Forgot your password</h2>
            <form action="/forgot_password" method="post">
                @csrf
                <label class="bold hideSmallScreen" for="email">Email:</label>
                <input class="input100" type="email" name="email" id="email" placeholder="Email" @isset($request->email)
                value={{$request->email}}
                @endisset>
                <div class="center">
                    <button type="submit">Send Request</button>
                </div>
                @isset($error)
                <p class="error center">{{$error}}</p>
                @endisset
            </form>
        </article>
    </section>
</div>
@endsection
