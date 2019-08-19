<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="{{ URL::asset('/css/filterbar.css') }}" />
    <title>Document</title>
</head>
<body>
    <section class="filter-container">

    </section>


    <section id="filterbar-container" class="filterbar-container">
        <ul>
            <li><a href="#"> <img class='filterbar-main-logo' src="{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}"></a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-marker (4).svg')}}"> Locate Nearest </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-chinese-fried-rice (2).svg')}}"> Asian </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cake.svg')}}"> Bakery | Desserts </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-grill (1).svg')}}"> Barbecue </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter//icons8-cheeseburger (1).svg')}}"> Burgers </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coconut-cocktail.svg')}}"> Caribbean </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-coffee-to-go (1).svg')}}"> Coffee | Beverages </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-baguette (1).svg')}}"> French </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-french-fries (2).svg')}}"> Fries </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-taco (2).svg')}}"> Mexican </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-salami-pizza (1).svg')}}"> Pizza | Pasta </a></li>
            <li><a href="#"> <img class='filterbar' src="{{URL::asset('assets/ICONS/Filter/icons8-crab (2).svg')}}"> Seafood </a></li>
        </ul>
    </section>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>

    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("filterbar-container");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>

</body>
</html>
