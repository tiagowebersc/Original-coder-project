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

                    <h1>FoodTruck Name</h1>
                    <div class="favstar">
                        <img src="assets/ICONS/Food Truck Cards/icons8-star-filled.svg" alt="">Review Number
                        <img src="assets/ICONS/Food Truck Cards/icons8-heart-outline.svg" alt="">
                    </div>
        
                    <hr>
        
                    <div class="truckcontact">
                        <div class="contactnumber" name="contactnumber">
                            <img name="phoneicon" class="phoneicon" src="assets//ICONS/icons8-cell-phone (2).svg" alt=""> Phone Number
                        </div>
                        <div class="contactweb" name="contactweb">
                                <img name="webicon" class="webicon" src="assets/ICONS/icons8-internet.svg" alt=""> Website
                        </div>
                        <div class="truckposition" name="truckposition">
                            <img  src="assets/ICONS/Food Truck Cards/icons8-marker.svg" alt=""> Position
                        </div>
                    </div>
        
                    <hr>
        
                    <div class="hourinfo">
                            <h2>Schedule</h2>
                            <div class="grid-1">
                                <div class="row" data-line="Line Number: 1">Mon: 8:00-8:30</div>
                                <div class="row" data-line="Line Number: 2">Tue: 8:30-9:00</div>
                                <div class="row" data-line="Line Number: 3">Wed: 9:00-9:30</div>
                                <div class="row" data-line="Line Number: 4">Thur: 9:30-10:00</div>
                                <div class="row" data-line="Line Number: 5">Fri: 10:00-10:30</div>
                                <div class="row" data-line="Line Number: 6">Sat: 10:00-10:30</div>
                            </div>
                    </div>
                    <br>
                    <div name="scrollicon" class="scrollicon">
                        <img src="../user food truck/Scroll down.svg" alt="">The scrool down
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