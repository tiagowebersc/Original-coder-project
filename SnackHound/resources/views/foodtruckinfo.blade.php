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
                            <td class="daySchedule"><?= $schedule->start_time . ' - ' . $schedule->end_time ?></td>
                            <td class="daySchedule">City: {{$schedule->city}}</td>
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
        @csrf
        <div class="itemCard">
            <img class="itemImg" src="{{URL::asset('assets/IMGS/Menu/'.$menu->id_truck.'/'.$menu->image)}}" alt="Avatar" style="width:100%">
            <div class="container">
                <div class="iteminfo" name="iteminfo">
                    <h2 name="itemname" class="itemName">{{$menu->name}}</h2>
                    <h2 class="itemPrice">{{number_format($menu->price, 2)}}€</h2>
                </div>
                <hr class="itemseparator">
                <section class="itemform" name="itemform">
                    <div class="plusMinus" name="plusminus">
                        <input class="plusBtn" name="plusBtn" type="button" value="+">
                        <p class="itemNumber">1</p>
                        <input class="minusBtn" name="minusBtn" type="button" value="-">
                    </div>
                    <div class="addBtn" name="addBtn">
                        <input type="hidden" name="idMenu" value="{{$menu->id_menu}}">
                        <input name="addToBag" class="addToBag" type="button" value="Add">
                    </div>
                </section>
            </div>
        </div>
        <?php } ?>

    </main>
</div>
@endsection

@section('js')
<script>
    // plus button
    let btnList = document.querySelectorAll(".plusBtn");
    for (let btn of btnList) {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            let total = parseInt(e.target.parentElement.querySelector(".itemNumber").innerHTML, 10);
            if (isNaN(total)) total = 0;
            total += 1;
            e.target.parentElement.querySelector(".itemNumber").innerHTML = total;
        });
    }
    // minus button
    btnList = document.querySelectorAll(".minusBtn");
    for (let btn of btnList) {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            let total = parseInt(e.target.parentElement.querySelector(".itemNumber").innerHTML, 10);
            if (isNaN(total)) total = 0;
            total -= 1;
            if (total == 0) total = 1;
            e.target.parentElement.querySelector(".itemNumber").innerHTML = total;
        });
    }
    // add button
    btnList = document.querySelectorAll(".addToBag");
    for (let btn of btnList) {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            let total = parseInt(e.target.parentElement.parentElement.querySelector(".plusMinus").querySelector(".itemNumber").innerHTML, 10);
            if (isNaN(total)) total = 1;
            const lunchBag = {
                _token: document.querySelector('input[name="_token"]').value,
                idMenu: e.target.parentElement.querySelector('input[name="idMenu"]').value,
                quantity: total
            };
            // ajax call
            console.log(lunchBag);
            fetch("/addlunchbag", {
                    method: "PUT",
                    body: JSON.stringify(lunchBag),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => {
                    console.log(response)
                }).catch(error => console.log(error));
        });
    }
</script>
@endsection
