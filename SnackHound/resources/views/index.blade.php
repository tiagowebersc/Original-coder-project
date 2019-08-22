@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@endsection

@section('title', 'SnackHound - Homepage')

@section('content')
<div class="background">
    <header class="bg-image">
        <section class="bg-text">
            <h1>Hungry?</h1>
            <p>SnackHound sniffs out the nearest food trucks in your are and lets you order, pay,
                and get directions to your favorite stop. Enter in your address below to get started!</p>

            <form action="">
                <input type="textbox" id="address" class="search" placeholder="  Enter your address..." name="search-location">
                <input type="button" id="submit" class="submit-location" name="submit-location" value="Search">
                <p class="or">or</p>
                <input type="submit" value="Turn on Location" name="turn-on-locaton" class="turn-on-location">
            </form>
            <div class="use-location-link">
                <a href="#">or click here to use your location</a>
            </div>
            <a href="#"><img src="{{URL::asset('assets/ICONS/icons8-move-down (1).svg')}}"></a>
        </section>
    </header>
    <img src="" alt="">
    <main>
        {{-- the filter start here --}}
        <section id="filter-container" class="filter-container">
            <div class="container">
                <div class="dropdown filter-buttom">
                    <button {{-- class="btn btn-primary dropdown-toggle"
                      type="button"
                      data-toggle="dropdown" --}} onclick="show()" class="filter-button">
                        Filter> <span class="caret"></span>
                    </button>
                    <ul id="custome-drpdown" class="custome-drpdown">
                        <li><a href="#" id="now"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (3).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}'" onmousedown="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (3).svg')}}'"> Location </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg' )}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg')}}'"> Asian </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-cake.svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cake (2).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cake.svg')}}'"> Bakery|Desserts </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-grill.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}'"> Barbecue </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger (1).svg')}}'"> Burgers </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}'"> Caribbean </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}'"> Coffee|Beverages </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-baguette.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}'"> French </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-french-fries (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}'"> Fries </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-taco.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}'"> Mexican </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}'"> Pizza|Pasta </a></li>
                        <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-crab (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}'"> Seafood </a></li>
                    </ul>
                </div>
            </div>
        </section>


        <section id="filterbar-container" class="filterbar-container">
            <ul>
                <li><a href="#" id="now"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (3).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}'" onmousedown="this.src='{{URL::asset('assets/ICONS/Filter/icons8-marker (3).svg')}}'"> Location </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg' )}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg')}}'"> Asian </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-cake.svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cake (2).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cake.svg')}}'"> Bakery|Desserts </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-grill.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}'"> Barbecue </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-cheeseburger (1).svg')}}'"> Burgers </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}'"> Caribbean </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}'"> Coffee|Beverages </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-baguette.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}'"> French </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-french-fries (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}'"> Fries </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-taco.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}'"> Mexican </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza.svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}'"> Pizza|Pasta </a></li>
                <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}" onmouseover="this.src='{{URL::asset('assets/ICONS/Filter/icons8-crab (1).svg')}}'" onmouseout="this.src='{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}'"> Seafood </a></li>
            </ul>
        </section>
        <section class="main-container">
            @csrf
            <section class="cards-container">
                <?php
                foreach ($trucks as $truck) {
                    ?>
                <div class="wrapper">
                    <div class="container">
                        <input type="hidden" name="idTruck" value="{{$truck->id_truck}}">
                        <?php if (Session::has('id_user')) {
                                if ($truck->favorite) { ?>
                        <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-outline.svg')}}" alt="">
                        <?php } else { ?>
                        <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-blank.svg')}}" alt="">
                        <?php }
                            } ?>
                        <div class="top">
                            <a href="/foodtruckinfo/{{$truck['id_truck']}}"><img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/'. $truck['image'])}}" alt="" /></a>
                        </div>
                        <div class="bottom">
                            <div class="left">
                                <div class="details">
                                    <a href="/foodtruckinfo/{{$truck['id_truck']}}">
                                        <h1><?= $truck['name'] ?></h1>
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
                                            <a class="card-category" href="#">category</a>
                                        </div>
                                        <div class="price_range">
                                            <?php for ($i = 1; $i <= $truck['price_range']; $i++) { ?>
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
                                    <th>{{$Schedle->weekday}}</th>
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
            <section class="map-container">
                <div id="map"></div>
            </section>
        </section>
    </main>
</div>
<script>
    document.getElementById("now").addEventListener("click", function(event) {
        event.preventDefault()
    });


    function show() {
        let x = document.getElementById("custome-drpdown");
        if (x.style.display === "none") {
            x.style.display = "grid";
        } else {
            x.style.display = "none";
        }
    }

    let bar = document.querySelector('.filterbar-container');

    window.addEventListener('scroll', function() {

        let viewportOffset = bar.getBoundingClientRect();
        let top = viewportOffset.top;

        let sidebar = document.querySelector('.sidebar-logo');
        let sidebarLogo = document.querySelector('.sidebar-logo-img');

        if (top === 0 && window.innerWidth > 1024) {
            sidebar.style.backgroundColor = 'white';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}';
        } else {
            sidebar.style.backgroundColor = 'black';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/Logo_White.svg')}}';
        }
    })

    window.addEventListener('resize', function() {

        let viewportOffset = bar.getBoundingClientRect();
        let top = viewportOffset.top;

        let sidebar = document.querySelector('.sidebar-logo');
        let sidebarLogo = document.querySelector('.sidebar-logo-img');

        if (top === 0 && window.innerWidth > 1024) {
            sidebar.style.backgroundColor = 'white';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black - White.svg')}}';
        } else {
            sidebar.style.backgroundColor = 'black';
            sidebarLogo.src = '{{URL::asset('assets/ICONS/Logo_White.svg ')}}';
        }
    })


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
            <?php
            foreach ($trucks as $truck) { ?> {
                coords: {
                    lat: <?php echo $truck['latitude'] ?>,
                    lng: <?php echo $truck['longitude'] ?>
                },
                iconImage: 'https://img.icons8.com/officel/40/000000/marker.png',
                content: '<img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/'. $truck['image'])}}" alt="" /><h1>"<?php echo $truck['name'] ?>"</h1>',
                animation: google.maps.Animation.DROP
            },
            <?php
            }
            ?>

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
                        if (data.favorite) {
                            e.target.src = e.target.src.replace("icons8-heart-blank.svg", "icons8-heart-outline.svg");
                        } else {
                            e.target.src = e.target.src.replace("icons8-heart-outline.svg", "icons8-heart-blank.svg");
                        }
                    });
                });
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtlX1KloHpjKujAEto6qDggr_-ibVatcA&callback=initMap" async defer></script>

@endsection
