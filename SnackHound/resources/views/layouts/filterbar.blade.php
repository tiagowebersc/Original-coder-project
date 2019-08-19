<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('/css/filterbar.css') }}" />
    <title>Document</title>
</head>
<body>
    <h1>dfgdfgdf</h1>
    <h1>dfgdfgdf</h1>
    <h1>dfgdfgdf</h1>
    <h1>dfgdfgdf</h1>
    <h1>dfgdfgdf</h1>
    <section id="filter-container" class="filter-container">
            <div class="container">
                <div class="dropdown">
                    <button
                      class="btn btn-primary dropdown-toggle"
                      type="button"
                      data-toggle="dropdown"
                    >
                      Filter <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">
                          <img class="filterbar" src="download (1).png" /> Coverage area
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="filterbar" src="download (1).png" /> Coverage area
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="filterbar" src="download (1).png" /> Coverage area
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
    </section>


    <section id="filterbar-container" class="filterbar-container">
        <ul>
            <li><a href="#"> <img class='filterbar-main-logo' src="{{URL::asset('assets/ICONS/LOGO/SVG/Logo_Black-White.svg')}}"></a></li>
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
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>
    <h1>sdkffdsdkj</h1>

    <script>

             $(document).ready(function() {
              $(".dropdown").on("hide.bs.dropdown", function() {
                $(".btn").html('Dropdown <span class="caret"></span>');
              });
               $(".dropdown").on("show.bs.dropdown", function() {
                $(".btn").html('Dropdown <span class="caret caret-up"></span>');
                 });
             });

             window.onscroll = function() {myFunction2()};

            let filter = document.getElementById("filter-container");
            let stickyFilter = filter.offsetTop;
            let navbar = document.getElementById("filterbar-container");
            let sticky = navbar.offsetTop;

            function myFunction2() {
              if (window.pageYOffset >= stickyFilter && window.pageYOffset >= sticky ) {
                filter.classList.add("sticky-filter")
                navbar.classList.add("sticky")
                 } else {
                    filter.classList.remove("sticky-filter");
                    navbar.classList.remove("sticky");
                }
            }
        </script>

</body>
</html>
