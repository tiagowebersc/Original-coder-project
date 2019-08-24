@extends('layouts.userSidebar')

@section('title', 'SnackHound - Edit Profile')

@section('css')


<link rel="stylesheet" href="{{ URL::asset('css/settingsUser.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main class='main'>

        <h3 class="main-title"> Hello, {{$user->first_name}} {{$user->last_name}}</h3>

        <form class='edit-form' action="" method='post'>
            @csrf

            <label for="user_first_name"> <strong>First name:</strong>
            <input name='user_first_name' type="text" value='{{$user->first_name}}'>
            </label>

            <label for="user_last_name"> <strong>Last name:</strong>
                    <input name='user_last_name' type="text" value='{{$user->last_name}}'>
            </label>

            <label for="user_phone"> <strong>Telephone:</strong>
                    <input name='user_phone' type="text" value='{{$user->telephone}}'>
            </label>

            <label for="user_pass"> <strong>Password:</strong>
                    <input type='password' name='user_pass'>
            </label>

            <label for="user_confPass"> <strong>Confirm password:</strong>
                    <input name='user_confPass' type="password">
            </label>


            <div id="helper"></div>
            <input type="submit" value='Edit'>

        </form>


</main>

@endsection

@section('js')
<script>
    $('.edit-form').submit( function(e) {

    if($('input[name="user_first_name"]').val().length < 3 || $('input[name="user_last_name"]').val().length < 3 || $('input[name="user_phone"]').val().length < 6){
        $("#helper").text("Invalid fields");
        e.preventDefault();

    } else {


        if($('input[name="user_pass"]').val().length > 0 || $('input[name="user_confPass"]').val().length > 0) {

           if($('input[name="user_pass"]').val() === $('input[name="user_confPass"]').val() ) {

                if($('input[name="user_pass"]').val().length < 3) {
                    e.preventDefault();
                   $("#helper").text("Please insert a valid password ");
                }
           } else {
            e.preventDefault();
            $("#helper").text("Please confirm the password ");
           }
        }


    }
})

</script>
@endsection
