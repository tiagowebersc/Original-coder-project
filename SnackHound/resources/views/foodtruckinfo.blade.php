@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/foodtruckinfo.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound - FoodTruck Info')

@section('content')
<div class="background">
    <header>
        <!-- principal div header start here -->
        <div class="backgrounddiv" name="backgrounddiv">

            <div name="truckinfo" class="truckinfo">

                <h1>{{$foodtruck->name}}</h1>
                <div class="favstar">
                    <div class="reviewDiv">
                        <?php for ($i = 1; $i <= $avg_rate; $i++) { ?>
                        <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-filled.svg')}}" alt="">
                        <?php }
                        $blankStars = 5 - $avg_rate;
                        for ($i = 1; $i <= $blankStars; $i++) {
                            ?>
                        <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-blank.svg')}}" alt="">
                        <?php } ?>
                        <p class="reviewNbr">{{COUNT($reviews)}}</p>
                    </div>
                    <img class="heartlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-heart-outline.svg')}}" alt="">
                </div>

                <hr class="separator">

                <div class="truckcontact">
                    <div class="contactlist">
                        <div class="contactnumber" name="contactnumber">
                            <img name="phoneicon" class="phoneicon" src="{{URL::asset('assets/ICONS/icons8-cell-phone (1).svg')}}" alt="">
                            <p class="phoneInfo" name="phoneInfo">{{$foodtruck->telephone}}</p>
                        </div>
                        <div class="contactweb" name="contactweb">
                            <img name="webicon" class="webicon" src="{{URL::asset('assets/ICONS/icons8-internet (1).svg')}}" alt="">
                            <p class="webInfo" name="webInfo">{{$foodtruck->website}}</p>
                        </div>
                    </div>
                    <div class="truckposition" name="truckposition">
                        <img class="positionImg" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-marker.svg')}}" alt="">
                        <p class="positionInfo" name="positionInfo">Position</p>
                    </div>
                </div>

                <hr class="separator">

                <div class="hourinfo">
                    <table class="scheduleTable">
                        <?php
                        $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                        foreach ($schedules as $schedule) { ?>
                        <div class="row">
                            <p class="daySchedule"></p>
                        </div>
                        <br>

                        <tr>
                            <td class="daySchedule"><?= $weekdays[$schedule->weekday] ?>:</td>
                            <td><?= $schedule->start_time . ' - ' . $schedule->end_time ?></td>
                            <td> / Place:</td>
                        </tr>

                        <?php
                        }

                        ?>
                    </table>
                </div>
                <br>
                <div name="scrollicon" class="scrollicon">
                    <img class="scrollImg" src="{{URL::asset('assets/IMGS/ScrollDown.svg')}}" alt="">
                </div>

            </div>

        </div>
        <!-- <img name="backgroundimg" class="backgroundimg" src="frittenwerk.png" alt=""> -->


        <!-- principal div HEADER end here -->
    </header>
    <main>
        <?php
        foreach ($menus as $menu) { ?>
        <div class="itemcard">
            <img class="favoritestar" src="{{URL::asset('assets/IMGS/pizza1.jpg')}}" alt="Avatar" style="width:100%">
            <div class="container">
                <div class="iteminfo" name="iteminfo">
                    <h2 name="itemname" class="itemName">{{$menu->name}}</h2>
                    <h2 class="itemPrice">Price</h2>
                </div>
                <hr class="itemseparator">
                <form class="itemform" name="itemform" action="" method="POST">
                    <div class="plusMinus" name="plusminus">
                        <input class="plusBtn" name="plusBtn" type="submit" value="+">
                        <p>Number</p>
                        <input class="minusBtn" name="minusBtn" type="submit" value="-">
                    </div>
                    <div class="addBtn" name="addBtn">
                        <input name="addToBag" class="addToBag" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>

    </main>
</div>
@endsection
