@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">
<link
href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet"
/>
@endsection

@section('title', 'SnackHound - Homepage')

@section('content')

 <header class="bg-image">
    <section class="bg-text">
        <h1>Hungry?</h1>
        <p>SnackHound sniffs out the nearest food trucks in your are and lets you order, pay,
            and get directions to your favorite stop. Enter in your address below to get started!</p>

        <form action="">
            <input type="search" class="search" placeholder="  Enter your address..." name="search-location">
            <input type="submit" class="submit-location" name="submit-location" value="Search">
            <p class="or">or</p>
            <input type="submit" value="Turn on Location" name="turn-on-locaton" class="turn-on-location" >
        </form>
        <div class="use-location-link">
            <a href="#">or click here to use your location</a>
        </div>
        <a href="#"><img src="{{URL::asset('assets/ICONS/icons8-move-down (1).svg')}}"></a>
    </section>
</header>
<img src="" alt="">
<main>
    <section class="main-container">
        <section class="cards-container">
            <?php
            foreach ($trucks as $truck) {
                # code...
                ?>
                <div class="wrapper">
                        <div class="container">
                          <div class="top">
                            <img
                              src="{{URL::asset('assets/IMGS/Food Trucks/'. $truck['image'])}}"
                              alt=""
                            />
                          </div>
                          <div class="bottom">
                            <div class="left">
                              <div class="details">
                              <h1><?= $truck['name'] ?></h1>
                                <div class="stars-lication">
                                    <h4>stars</h4>
                                    <div class="location-icon-meter">
                                        <p>
                                            <img
                                            src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-marker.svg')}}"
                                            alt="" height="25" width="25"
                                              />
                                        </p>
                                        <p>..250</p>
                                    </div>
                                </div>
                                <div id="line"><hr /></div>
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
            }
        </section>
        <section class="map-container">
            <div id="map"></div>
        </section>
    </section>
</main>
            <script>
                function initMap(){
                    // Map options
                    var options = {
                        zoom:10,
                        center:{lat: 49.779705, lng: 6.091878}
                    }

                    // New map
                    var map = new google.maps.Map(document.getElementById('map'), options);

                    // Listen for click on map
                    google.maps.event.addListener(map, 'click', function(event){
                        // Add marker
                        addMarker({coords:event.latLng});
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

                    // Array of markers
                    var markers = [
                        {
                        coords:{lat:49.815273, lng: 6.129583},
                        iconImage:'https://img.icons8.com/officel/40/000000/marker.png',
                        content:'<img src="{{URL::asset('assets/IMGS/Food Trucks/ballucci_catering.jpg')}}">',
                        animation: google.maps.Animation.DROP
                        },
                        {
                        coords:{lat:49.659599, lng: 5.915250},
                        iconImage:'https://img.icons8.com/officel/40/000000/marker.png',
                        content:'<img src="{{URL::asset('assets/IMGS/Food Trucks/go_fish.jpg')}}">'
                        },
                        {
                        coords:{lat:49.495640, lng: 5.985173},
                        content:'<img src="{{URL::asset('assets/IMGS/Food Trucks/mr.froopy-frozenjoghurt.jpg')}}">',
                        iconImage:'https://img.icons8.com/officel/40/000000/marker.png'
                        }

                    ];

                    // Loop through markers
                    for(let i = 0;i < markers.length;i++){
                        // Add marker
                        addMarker(markers[i]);
                    }

                    // Add Marker Function
                    function addMarker(props){
                        let marker = new google.maps.Marker({
                        position:props.coords,
                        map:map,
                        //icon:props.iconImage
                        });
                        // Check for customicon
                        if(props.iconImage){
                        // Set icon image
                        marker.setIcon(props.iconImage);
                        }

                        // Check content
                        if(props.content){
                        let infoWindow = new google.maps.InfoWindow({
                            content:props.content
                        });

                        marker.addListener('click', function(){
                            infoWindow.open(map, marker);
                        });
                        }

                    }

                    }

            </script>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtlX1KloHpjKujAEto6qDggr_-ibVatcA&callback=initMap"
              async defer></script>

@endsection
