@extends('layouts.customerSidebar')

@section('css')

<link rel="stylesheet" href="{{URL::asset('/css/menu.css')}}" />
@endsection


@section('content')

<div class="background">

     

    <div class="truckName">
        <h1>Hello, FoodTruck Name</h1>
        <h2>MENU SETTINGS</h2>
    </div>

    <main>
        <div class="settingCard" name="settingCard">
            <form action="" method="POST">
                <p>Item Name:</p>
                <input type="text" name="itemName" class="itemName">
                <p>Price:</p>
                <div class="priceCategory">
                    <input type="number">
                    <label class="container">Vegetarian:
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                    <label class="container">Spicy:
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                </div>
                <p>Description:</p>
                <textarea class="descriptionArea" name="" id="" cols="30" rows="5"></textarea>
                <p>Image:</p>
                <input class="upload" name="upload" type="file">
                <input class="submit" name="submit" type="submit">

            </form>

        </div>

        <?php
        foreach ($menus as $menu) { ?>
        <div class="itemCard">
                <img class="itemImg" src="{{URL::asset('assets/IMGS/Menu/'.$menu->id_truck.'/'.$menu->image)}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <div class="iteminfo" name="iteminfo">
                        <h2 name="itemname" class="itemName">{{$menu->name}}</h2>
                        <h2 class="itemPrice">{{$menu->price}}€</h2>
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
