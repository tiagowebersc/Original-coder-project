@extends('layouts.truckOwnerSidebar')

@section('title', 'SnackHound - Truck Menu')

@section('css')

<link rel="stylesheet" href="{{URL::asset('/css/menu.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection


@section('content')

<div class="background">

    <main>
            <div class="mainquery">
                    <div class="truckName">
                        <h3 class='main-title'>Hello, {{$truck->name}}</h3>
                        <h4 class='main-title'>MENU:</h4>
                    </div>
                    <div class="settingCard" name="settingCard">
                        <form action="/truck/menu" enctype="multipart/form-data" method="POST" class='form-edit-submit'>
                            @csrf
                            <label for='itemName'>Name:
                            <input required value='{{$menuEdit->name}}' type="text" name="itemName" class="itemName">
                            </label>

                            <label class="itemPrice" for="itemPrice">Price (€):
                                    <input required max="9999.99" step="0.01" value='{{$menuEdit->price}}' name='itemPrice' class="itemPrice" id='item-price' type="number">
                            </label>

                            <label for="itemDescription"> Description:
                                    <textarea required class="descriptionArea" name="itemDescription" id="" cols="30" rows="5"> {{$menuEdit->description}} </textarea>
                            </label>
                            <input type="hidden" name='menuId' value='{{$menuEdit->id_menu}}'>
                            <label class="itemPrice" for="upload"> Image:
                                <div id='img-helper'>
                                    <span id='img-helper-text'>Change image?</span>
                                    <input class="itemPrice upload" name="upload" type="file">
                                </div>

                            </label>
                            <div id="helper"></div>
                            <input class="submit" name="submit" type="submit" value="Edit Item">
                        </form>
                    </div>
                </div>


    <section class='menu-section'>
        @foreach ($menus as $menu)

        @if($menuEdit->id_menu === $menu->id_menu)
            <div class="itemList selected">
        @else
            <div class="itemList">
        @endif

                <div class="itemCard">
                    <img class="itemImg" src="{{URL::asset('assets/IMGS/Menu/'.$menu->id_truck . '/' . $menu->image)}}" alt="menu image." style="width:100%">
                    <div class="container">
                        <div class="iteminfo" name="iteminfo">
                            <p name="itemname" class="itemName">{{$menu->name}}</p>
                            <p class="itemPrice-card">{{$menu->price}}€</p>
                        </div>
                        <hr class="itemseparator">
                        <form class="itemform" name="itemform" action="/truck/menu/info" method="POST">
                            @csrf
                            <div class="settingBtn" name="settingBtn">
                                <input class="editBtn" name="editBtn" type="submit" value="EDIT">
                                <a class="deleteBtn" href='/truck/menu/delete/{{$menu->id_menu}}'> DELETE </a>
                            </div>
                            <input type="hidden" name="menuId" value='{{$menu->id_menu}}'>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    </main>

</div>

@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/menu.js') }}"></script>
@endsection

