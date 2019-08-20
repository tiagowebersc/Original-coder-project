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
                <input type="search" class="search" placeholder="  Enter your address..." name="search-location">
                <input type="submit" class="submit-location" name="submit-location" value="Search">
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
                    <button
                      class="btn btn-primary dropdown-toggle"
                      type="button"
                      data-toggle="dropdown"
                    >
                      Filter <span class="caret"></span>
                    </button>
                    <ul id="dropdown-menu" class="dropdown-menu">
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}"> Location
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg')}}"> Asian
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cake.svg')}}"> Bakery|Desserts
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}"> Barbecue
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cheeseburger (1).svg')}}"> Burgers
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}"> Caribbean
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}"> Coffee|Beverages
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}"> French
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}"> Fries
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}"> Mexican
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}"> Pizza|Pasta
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}"> Seafood
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
    </section>


    <section id="filterbar-container" class="filterbar-container">
        <ul>
            {{-- <li><a href="#"> <img class='filterbar-main-logo' src="{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}"></a></li> --}}
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}"> Location </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg')}}"> Asian </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cake.svg')}}"> Bakery|Desserts </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}"> Barbecue </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cheeseburger (1).svg')}}"> Burgers </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}"> Caribbean </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}"> Coffee|Beverages </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}"> French </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}"> Fries </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}"> Mexican </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}"> Pizza|Pasta </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}"> Seafood </a></li>
        </ul>
    </section>
        <section class="main-container">
            <section class="cards-container">
                <?php
                foreach ($trucks as $truck) {
                    ?>
                <div class="wrapper">
                    <div class="container">
                        <div class="top">
                            <img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/'. $truck['image'])}}" alt="" />
                        </div>
                        <div class="bottom">
                            <div class="left">
                                <div class="details">
                                    <a href="/foodtruckinfo/{{$truck['id_truck']}}">
                                        <h1><?= $truck['name'] ?></h1>
                                    </a>
                                    <div class="stars-lication">
                                        <h4>stars</h4>
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
                                        <a class="card-category" href="#">category</a>
                                        <h4>€€€</h4>
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
                                    <th>Width</th>
                                    <th>Height</th>
                                </tr>
                                <tr>
                                    <td>3000mm</td>
                                    <td>4000mm</td>
                                </tr>
                                <tr>
                                    <th>Something</th>
                                    <th>Something</th>
                                </tr>
                                <tr>
                                    <td>200mm</td>
                                    <td>200mm</td>
                                </tr>
                                <tr>
                                    <th>Something</th>
                                    <th>Something</th>
                                </tr>
                                <tr>
                                    <td>200mm</td>
                                    <td>200mm</td>
                                </tr>
                                <tr>
                                    <th>Something</th>
                                    <th>Something</th>
                                </tr>
                                <tr>
                                    <td>200mm</td>
                                    <td>200mm</td>
                                </tr>
                            </table>
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

    let bar = document.querySelector('.filterbar-container');

    window.addEventListener('scroll', function() {

        let viewportOffset = bar.getBoundingClientRect();
        let top = viewportOffset.top;

        let sidebar = document.querySelector('.sidebar-logo');
        let sidebarLogo = document.querySelector('.sidebar-logo-img');

        if(top === 0 && window.innerWidth > 1024) {
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

    if(top === 0 && window.innerWidth > 1024) {
        sidebar.style.backgroundColor = 'white';
        sidebarLogo.src = '{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}';
    } else {
        sidebar.style.backgroundColor = 'black';
        sidebarLogo.src = '{{URL::asset('assets/ICONS/Logo_White.svg')}}';
    }
})

    function initMap() {
        // Map options
        var options = {
            zoom: 10,
            center: {
                lat: 49.779705,
                lng: 6.091878
            }
        }

        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        // Listen for click on map
        google.maps.event.addListener(map, 'click', function(event) {
            // Add marker
            addMarker({
                coords: event.latLng
            });
        });

        /*
        // Add marker
        var marker = new google.maps.Marker({
            position:{lat:42.4668,lng:-70.9495},
            map:map,
            icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        });

        var infoWindow = new google.maps.InfoWindow({
            content:'<h1>Lynn MA</h1>'
        });

        marker.addListener('click', function(){
            infoWindow.open(map, marker);
        });
        */


        var example=[
            <?php
                foreach ($trucks as $truck) {?>
                    {
                        name : "<?php echo $truck['name'] ?>"
                    },
            <?php
                }
                ?>

        ]
        console.log(example);


        // Array of markers
        var markers = [{
                coords: {
                    lat: 49.815273,
                    lng: 6.129583
                },
                iconImage: 'https://img.icons8.com/officel/40/000000/marker.png',
                content: '<img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/burger_and_co.jpg')}}" alt="" />',
                animation: google.maps.Animation.DROP
            },
            {
                coords: {
                    lat: 49.659599,
                    lng: 5.915250
                },
                iconImage: 'https://img.icons8.com/officel/40/000000/marker.png',
                content: '<img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/burger_and_co.jpg')}}" alt="" />',
            },
            {
                coords: {
                    lat: 49.495640,
                    lng: 5.985173
                },
                content: '<img src="{{URL::asset('assets/IMGS/Food Trucks/RESIZED/burger_and_co.jpg')}}" alt="" /><h1>hloo</h1>',
                iconImage: 'https://img.icons8.com/officel/40/000000/marker.png'
            }

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

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtlX1KloHpjKujAEto6qDggr_-ibVatcA&callback=initMap" async defer></script>

@endsection
