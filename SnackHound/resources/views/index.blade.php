@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto+Slab&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound')

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
<main>
        <div id="map"></div>
        <script>
          var map;
          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat:  34.397, lng: 150.644},
              zoom: 8
            });
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtlX1KloHpjKujAEto6qDggr_-ibVatcA&callback=initMap"
        async defer></script>
</main>

@endsection
