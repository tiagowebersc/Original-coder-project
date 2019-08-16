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
            <h2 class="center">We sent you an email to reset your password!</h2>
        </article>
    </section>
</div>
@endsection
