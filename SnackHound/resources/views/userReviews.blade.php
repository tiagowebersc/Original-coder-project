@extends('layouts.userSidebar')

@section('title', 'SnackHound - User Favorites')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/userReviews.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet"> 
@endsection

@section('content')
<div class="background">
    <div class="scrollBoxReview">
        <h1>REVIEWS</h1>
        <div class="reviewList">
            <?php
            foreach ($reviews as $review) {
                ?>
            <div class="formReview">
            <h3>{{$review->truck}}</h3>
                <div class="userInfo">
                    <p class="userNameInBox">{{$review->userName}}</p>
                    <p><?php
                            for ($i = 1; $i <= $review->rate; $i++) { ?>
                        <img class="ratingStar" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-filled.svg')}}" alt="">
                        <?php }
                            $blankStars = 5 - $review->rate;
                            for ($i = 1; $i <= $blankStars; $i++) {
                                ?>
                        <img class="ratingStar" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-blank.svg')}}" alt="">
                        <?php } ?>
                    </p>
                    <p class="dateReview">({{$review->created_at}}) :</p>
                </div>
                <div class="userReview">
                    <p>{{$review->comment}}</p>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
@endsection
@section('js')
@endsection