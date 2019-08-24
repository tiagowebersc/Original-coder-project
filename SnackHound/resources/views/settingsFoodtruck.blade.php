@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Truck Settings')

@section('css')


<link rel="stylesheet" href="{{ URL::asset('css/settingsFoodtruck.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main class='main'>

        <h3 class="main-title"> Hello, {{$truck->name}}</h3>
        <h4 class='main-title'>SETTINGS: </h4>


        <form class='edit-form' action="" method='post'>
            @csrf

            <label for="truck_name"> <strong>Name:</strong>
            <input name='truck_name' type="text" value='{{$truck->name}}'>
            </label>

            <label for="truck_price"> <strong>Price range:</strong>
                    <input name='truck_price' type="number" min="1" max="5" value='{{$truck->price_range}}'>
            </label>

            <label for="truck_phone"> <strong>Telephone:</strong>
                    <input name='truck_phone' type="text" value='{{$truck->telephone}}'>
            </label>

            <label for="truck_desc"> <strong>Description:</strong>
                    <textarea name='truck_desc'>{{$truck->description}}</textarea>
            </label>

            <label for="truck_website"> <strong>Website:</strong>
                    <input name='truck_website' type="url" value='{{$truck->website}}'>
            </label>


            <div id="helper"></div>
            <input type="submit" value='Edit'>

        </form>


</main>

@endsection

@section('js')
<script>
    $('.edit-form').submit( function(e) {

    if($('input[name="truck_name"]').val().length < 3 || $('input[name="truck_price"]').val() < 1 || $('input[name="truck_price"]').val() > 5 || $('input[name="truck_phone"]').val().length < 6 || $('textarea[name="truck_desc"]').val().length < 10 ) {
        $("#helper").text("Invalid fields");
        e.preventDefault();
    }
    })

</script>
@endsection
