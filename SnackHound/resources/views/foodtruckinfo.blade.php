<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodTruck Info</title>
</head>
<body>
    <link rel="stylesheet" href="{{URL::asset('/css/foodtruckinfo.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">


    <header>
        <!-- principal div header start here -->
        <div class="backgrounddiv" name="backgrounddiv">

            <div name="truckinfo" class="truckinfo"> 

                    <h1>FOODTRUCK</h1>
                    <div class="favstar">
                        <div class="reviewDiv">
                                <img class="starlogo" src="assets/ICONS/Food Truck Cards/icons8-star-filled.svg" alt="">
                                <p class="reviewNbr">Review Number</p>
                        </div>
                        <img class="heartlogo" src="assets/ICONS/Food Truck Cards/icons8-heart-outline.svg" alt="">
                    </div>
        
                    <hr class="separator">
        
                    <div class="truckcontact">
                        <div class="contactlist">
                                <div class="contactnumber" name="contactnumber">
                                    <img name="phoneicon" class="phoneicon" src="assets//ICONS/icons8-cell-phone (1).svg" alt=""> 
                                    <p class="phoneInfo" name="phoneInfo">Phone Number</p>
                                </div>
                                <div class="contactweb" name="contactweb">
                                    <img name="webicon" class="webicon" src="assets/ICONS/icons8-internet (1).svg" alt="">
                                    <p class="webInfo" name="webInfo">Website</p>
                                </div>
                        </div>
                        <div class="truckposition" name="truckposition">
                            <img class="positionImg" src="assets/ICONS/Food Truck Cards/icons8-marker.svg" alt="">
                             <p class="positionInfo" name="positionInfo">Position</p>
                        </div>
                    </div>
        
                    <hr class="separator">
        
                    <div class="hourinfo">
                            {{-- <div class="grid-1">
                                <div class="row" data-line="Line Number: 1"><p class="daySchedule">Mon:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 2"><p class="daySchedule">Tue:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 3"><p class="daySchedule">Wed:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 4"><p class="daySchedule">Thur:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 5"><p class="daySchedule">Fri:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 6"><p class="daySchedule">Sat:</p> HOUR at PLACE</div>
                                <br>
                                <div class="row" data-line="Line Number: 6"><p class="daySchedule">Sun:</p> HOUR at PLACE</div>
                            </div> --}}

                            <table class="scheduleTable">
                                    <tr>
                                      <td class="daySchedule">Mon: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Tue: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Wed: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Thur: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Fri: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Sat: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                    <tr>
                                      <td class="daySchedule">Sun: </td>
                                      <td>Hour</td>
                                      <td>Place</td>
                                    </tr>
                                </table>
                            </div>
                    <br>
                    <div name="scrollicon" class="scrollicon">
                        <img class="scrollImg" src="assets/IMGS/ScrollDown.svg" alt="">
                    </div>
        
            </div>

        </div>
            <!-- <img name="backgroundimg" class="backgroundimg" src="frittenwerk.png" alt=""> -->
        

        <!-- principal div HEADER end here -->
    </header>
    <main>

            <div class="itemcard">
                    <img class="favoritestar" src="assets/IMGS/pizza1.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <div class="iteminfo" name="iteminfo">
                                <h2 name="itemname">Item Name</h2>
                                <h2>Price</h2>
                        </div>
                        <hr>
                      <form class="itemform" name="itemform" action="" method="POST">
                        <div class="plusminus" name="plusminus">
                            <input class="editbtn" name="editbtn" type="submit" value="+">
                            <p>Number</p>
                            <input class="deletebtn" name="deletebtn" type="submit" value="-">
                        </div>
                        <div class="addBtn" name="addBtn">
                            <input name="addItem" class="addItem" type="submit" value="Add">
                        </div>
                      </form>
                    </div>
                  </div>    

    </main>  
</body>
</html>