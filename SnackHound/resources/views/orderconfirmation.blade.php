@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/orderconfirmation.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600|Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
@endsection

@section('title', 'SnackHound - Lunch Bag')

@section('content')

<main class="background">
    <section class="frame">
        <!-- This header will only be visible on wider screens -->
        <!-- Black Security Heading for the form -->
        <div id="securityHeader">
            <div id="left-aligned">
                <div id="lockContainer">
                    <img id="lock" src="{{URL::asset('assets/ICONS/LUNCHBAG/lock.svg')}}" alt="icon of a padlock in white">
                </div>
                <div id="securityWords">
                    <h2 class="securityWords" id="securityTop">Order confirmation</h2>
                    <h2 class="securityWords" id="securityBottom">Always Safe & Secure</h2>
                </div>
            </div>
        </div>
        <!-- This header will only be visible on mobile. -->
        <div id="mobileHeader">
            <h1 id="mobileTitle">Order confirmation</h1>
            <div id="right-aligned">
                <div id="blackLockContainer">
                    <img id="blackLock" src="{{URL::asset('assets/ICONS/LUNCHBAG/lock_black.svg')}}" alt="icon of a padlock in black">
                </div>
                <div id="blackSecurityWords">
                    <h2 class="blackSecurityWords" id="blackSecurityTop">Secure Checkout</h2>
                    <h2 class="blackSecurityWords" id="blackSecurityBottom">Always Safe & Secure</h2>
                </div>
            </div>
        </div>
        <!-- End header -->
        <form action="/generateOrder" method="post">
            <div id="left-content">
                <article id="lunchbagCost" class="panel">
                    <h2>Your order has been accepted!</h2>
                    <p>Thank you for your order, your order number is D5JLTL. You can find directions to your truck on the map to the right and contact details below! Did you like your experience, or not so much? Please leave a review on the food truck’s page!</p>
                    
                </article>
                @csrf
                <input type="hidden" id="idTruck" value="{{$truck->id_truck}}">
                <article id="lunchbagMailingList" class="panel" style="background-image: url('/assets/IMGS/Food Trucks/BLURRED/{{$truck->image}}');">
                    <h2 class="foodTruckName">{{$truck->name}}</h2>
                    <div class="starheart">
                    <div>
                        <?php
                             for ($i = 1; $i <= $avg_rate; $i++) { ?>
                        <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-filled.svg')}}" alt="">
                        <?php }
                        $blankStars = 5 - $avg_rate;
                        for ($i = 1; $i <= $blankStars; $i++) {
                            ?>
                        <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-blank.svg')}}" alt="">
                        <?php } ?>
                        <span class="reviewNbr">{{$total_reviews}}</span>
                    </div>
                    <?php if ($favorite) { ?>
                    <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-outline.svg')}}" alt="">
                    <?php } else { ?>
                    <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-blank.svg')}}" alt="">
                    <?php } ?>
                    </div>
                    <div class="contactlist">
                        <div class="contactnumber" name="contactnumber">
                            <img class="icons" src="{{URL::asset('assets/ICONS/icons8-cell-phone (1).svg')}}" alt="">
                            <span class="info">{{$truck->telephone}}</span>
                        </div>
                        <div class="contactweb" name="contactweb">
                            <img class="icons" src="{{URL::asset('assets/ICONS/icons8-internet (1).svg')}}" alt="">
                            <span class="info">{{$truck->website}}</span>
                        </div>
                    </div>
                </article>
            </div>
            <article id="lunchbagList" class="panel map-container">
                <div id="map"></div>
            </article>
        </form>
    </section>
</main>
@endsection

@section('js')
<script>
    window.addEventListener('DOMContentLoaded', (event) => {

        // start the map
        function initMap() {
            // Map options
            let options = {
                zoom: 10,
                center: {
                    lat: 49.779705,
                    lng: 6.091878
                },
            }

            // New map
            var map = new google.maps.Map(document.getElementById('map'), options);

            // Array of markers
            var markers = [
                // insert the mark of the foodtruck

            ];
            // Loop through markers
            for (let i = 0; i < markers.length; i++) {
                // Add marker
                addMarker(markers[i]);
            }
            // Add Marker Function
            function addMarker(props) {
                let marker = new google.maps.Marker({
                    position: props.coords,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    //icon:props.iconImage
                });
                // Check for customicon
                if (props.iconImage) {
                    // Set icon image
                    marker.setIcon(props.iconImage);
                }
                // Check content
                if (props.content) {
                    let infoWindow = new google.maps.InfoWindow({
                        content: props.content
                    });
                    marker.addListener('click', function() {
                        infoWindow.open(map, marker);
                    });
                }
            }
            var geocoder = new google.maps.Geocoder();

            document.getElementById('submit').addEventListener('click', function() {
                geocodeAddress(geocoder, map);
            });
        }

        function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status === 'OK') {
                    resultsMap.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: resultsMap,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        // favorite
        let btnFavorite = document.querySelector(".heartlogo");
        btnFavorite.addEventListener("click", (e) => {
            const paramFavorite = {
                _token: document.querySelector('input[name="_token"]').value
            };
            const urlFavorite = "/foodtruck/favorite/" + document.querySelector("#idTruck").value;
            fetch(urlFavorite, {
                    method: "POST",
                    body: JSON.stringify(paramFavorite),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => {
                    response.json().then(function(data) {
                        if (data.favorite) {
                            btnFavorite.src = btnFavorite.src.replace("icons8-heart-blank.svg", "icons8-heart-outline.svg");
                        } else {
                            btnFavorite.src = btnFavorite.src.replace("icons8-heart-outline.svg", "icons8-heart-blank.svg");
                        }
                    });
                });
        });
    });
</script>
@endsection
