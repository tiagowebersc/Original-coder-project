@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}" />
@endsection

@section('title', 'SnackHound')

@section('content')

 <header class="bg-image">
    <section class="bg-text">
        <h1>Hungry?</h1>
        <p>SnackHound sniffs out the nearest food trucks in your are and lets you order, pay,
            and get directions to your favorite stop. Enter in your address below to get started!</p>

        <form action="">
            <input type="search" class="search" placeholder="Enter your address..." name="search-location">
            <input type="submit" class="submit-location" name="submit-location" value="Search">
            <p>or</p>
            <input type="submit" value="Turn on Location" name="turn-on-locaton" class="turn-on-location" >
        </form>
     </section>
</header>

@endsection
