@extends('layouts.userSidebar')

@section('title', 'SnackHound - User Favorites')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/userFavorites.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />  
@endsection

@section('content')
<div class="background">
    <section class="cards-container">
        @csrf
        <?php
        if (count($favorites) == 0){
            ?>
<h1 class="void">You don't have any favorite foodtruck!</h1>
            <?php
        }
        foreach ($favorites as $truck) {
            ?>
        <div class="wrapper">
                <div class="container">
                <input type="hidden" name="idTruck" value="{{$truck->id_truck}}">
                <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-outline.svg')}}" alt="">
                <div class="top">
                    <a href="/foodtruckinfo/{{$truck['id_truck']}}"><img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/'. $truck->truck['image'])}}" alt="" /></a>
                </div>
                <div class="bottom">
                    <div class="left">
                        <div class="details">
                            <a href="/foodtruckinfo/{{$truck['id_truck']}}">
                                <h1><?= $truck->truck['name'] ?></h1>
                            </a>
                            <div class="stars-lication">
                                <div class="reviewDiv">
                                    <?php
                                        for ($i = 1; $i <= $truck['avgRate']; $i++) { ?>
                                    <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-filled.svg')}}" alt="">
                                    <?php }
                                    $blankStars = 5 - $truck['avgRate'];
                                    for ($i = 1; $i <= $blankStars ; $i++) {
                                        ?>
                                    <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-blank.svg')}}" alt="">
                                    <?php } ?>
                                    <p class="reviewNbr" id="reviewNbr"> {{($truck['reviewsNbr'])}} Reviews</p>
                                </div>
                                <div class="location-icon-meter">
                                    <p>
                                        <img src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-marker.svg')}}" alt="" height="25" width="25" />
                                    </p>
                                    <p>..250</p>
                                </div>
                            </div>
                            <div id="line">
                                <hr />
                            </div>
                            <div class="category-€">
                                <div class="category">
                                    <?php foreach ($truck->categories as $category) { ?>
                                        <a class="card-category" href="#">{{$category->name}}</a>
                                    <?php } ?>
                                </div>
                                <div class="price_range">
                                    <?php for ($i = 1; $i <= $truck->truck['price_range']; $i++) { ?>
                                        <h5>€</h5>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <div class="icon"><i class="material-icons md-dark">
                        touch_app
                    </i></div>
                <div class="contents">
                    <table>
                        <tr>
                            <h3>Schedules</h3>
                            <th>weekday</th>
                            <th>Start-Time</th>
                            <th>End-Time</th>
                            <th>City</th>
                        </tr>
                        <?php
                        foreach ($truck->schedules as $Schedle) {
                            $start_time = \Carbon\Carbon::createFromFormat('H:i:s',$Schedle->start_time)->format('h:i');
                            $end_time = \Carbon\Carbon::createFromFormat('H:i:s',$Schedle->end_time)->format('h:i');
                        ?>
                        <tr>
                            @switch($Schedle->weekday)

                            @case(0)
                                <th class='display-weekday'>Monday:</th>
                                @break
                            @case(1)
                                <th class='display-weekday'>Tuesday:</th>
                                @break
                            @case(2)
                                <th class='display-weekday'>Wednesday:</th>
                                @break
                            @case(3)
                                <th class='display-weekday'>Thursday:</th>
                                @break
                            @case(4)
                                <th class='display-weekday'>Friday:</th>
                                @break
                            @case(5)
                                <th class='display-weekday'>Saturday:</th>
                                @break
                            @case(6)
                                <th class='display-weekday'>Sunday:</th>
                                @break

                            @endswitch
                            <th>{{$start_time}}</th>
                            <th>{{$end_time}}</th>
                            <th>{{$Schedle->city}}</th>
                        </tr>
                        <?php } ?>
                    </table>
                    <img class=""  src="{{URL::asset('assets/ICONS/Footer%20Content/MadeInLuxLogo.svg')}}">
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </section>
</div>
@endsection
@section('js')
<script>
    // Favorite ----------------------------------------------------------------
    let favoriteList = document.querySelectorAll(".heartlogo");
    for (let btnFavorite of favoriteList) {
        btnFavorite.addEventListener("click", (e) => {
            const paramFavorite = {
                _token: document.querySelector('input[name="_token"]').value
            };
            const urlFavorite = "/foodtruck/favorite/" + e.target.parentElement.querySelector('input[name="idTruck"]').value;
            fetch(urlFavorite, {
                    method: "POST",
                    body: JSON.stringify(paramFavorite),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => {
                    response.json().then(function(data) {
                        if (!data.favorite) {
                            e.target.parentElement.parentElement.remove();
                        }
                    });
                });
        });
    }
</script>
@endsection