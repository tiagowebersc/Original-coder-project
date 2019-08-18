<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
    @yield('css')

</head>

<body>


    <div class="sidebar">
        <div class='side-mobile-pic'><img src="{{URL::asset('assets/IMGS/475605E3-69C5-4D2B-8727-61B7BB8C4699-500w.jpeg')}}" alt=""></div>

        <div class="sidebar-logo">
            <a href="/"><img class='sidebar-logo-img' src="{{URL::asset('assets/ICONS/Logo_White.svg')}}" alt="Logo of SnackHound."></a>
        </div>


        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://img.icons8.com/android/24/000000/menu.png">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <div> <a href='#' class='dropdown-item'> <img class='dropdown-icon' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-track-order (2).svg')}}" alt="FIX THE ALT."> <span>Coverage Area</span> </a> </div>

                <div> <a href='#' class='dropdown-item'> <img class='dropdown-icon' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-doggy-bag (2).svg')}}" alt="FIX THE ALT."> <span>Lunchbag</span> </a> </div>

                <div> <a href='#' class='dropdown-item'> <img class='dropdown-icon' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-food-truck.svg')}}" alt="FIX THE ALT."> <span>Food Truck Owner?</span> </a> </div>

                <div class='dropdown-sign'> <a href="/signup" class='dropdown-item'> SIGN UP </a> </div>

                <div class='dropdown-log'> <a href="/login" class='dropdown-item'> LOG IN </a> </div>

            </div>
        </div>

        <div class='sidebar-items'>

            <ul>
                <li><a href="#"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-track-order (1).svg')}}"> Coverage area </a></li>
                <li><a href="#"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-doggy-bag (1).svg')}}"> Lunchbag </a></li>
                <li><a href="#"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-info (1).svg')}}"> About Us </a></li>
                <li><a href="/truck"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-truck.svg')}}"> Food Truck Owner </a></li>
                <li><a href="/login"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-login-as-user (1).svg')}}"> Login | Sign Up </a></li>
                <li><a href="#"> <img class='sidebar-items-img' src="{{URL::asset('assets/ICONS/Sidebar%20Navigation/icons8-settings (1).svg')}}"> Account Settings </a></li>
            </ul>

        </div>
    </div>
    <div>
        <!-- Content -->
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('js')
</body>

</html>
