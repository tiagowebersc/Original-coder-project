@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/css/lunchbag.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600|Roboto+Slab&display=swap" rel="stylesheet">
@endsection

@section('title', 'SnackHound - Lunch Bag')

@section('content')

<main class="background">
    <section class="frame">
        <!-- This header will only be visible on wider screens -->
        <!-- Black Security Heading for the form -->
        <div id="securityHeader">
            <div id="left-aligned">
                <div id="lockContainer">
                    <img id="lock" src="{{URL::asset('assets/ICONS/LUNCHBAG/lock.svg')}}" alt="icon of a padlock in white">
                </div>
                <div id="securityWords">
                    <h2 class="securityWords" id="securityTop">Secure Checkout</h2>
                    <h2 class="securityWords" id="securityBottom">Always Safe & Secure</h2>
                </div>
            </div>
        </div>
        <!-- This header will only be visible on mobile. -->
        <div id="mobileHeader">
            <h1 id="mobileTitle">Checkout</h1>
            <div id="right-aligned">
                <div id="blackLockContainer">
                    <img id="blackLock" src="{{URL::asset('assets/ICONS/LUNCHBAG/lock_black.svg')}}" alt="icon of a padlock in black">
                </div>
                <div id="blackSecurityWords">
                    <h2 class="blackSecurityWords" id="blackSecurityTop">Secure Checkout</h2>
                    <h2 class="blackSecurityWords" id="blackSecurityBottom">Always Safe & Secure</h2>
                </div>
            </div>
        </div>
        <!-- End header -->
        <form action="" method="post">
            <div id="left-content">
                <article id="lunchbagCost" class="panel">
                    @csrf
                    <h1 id="title">Lunchbag</h2>
                    <div id="lunchbagTotal">
                        <div class="rows" id="row1">
                            <p class="labels">Order Total :</p>
                            <p class="labelContent" id="orderTotal">(totalAmt)</p>
                        </div>
                        <div class="rows" id="row2">
                            <p class="labels">Promo Code :</p>
                            <input class="labelContent" id="code" type="text" placeholder="code">
                        </div>
                        <hr >
                        <div class="rows" id="row3">
                            <p class="labels">Total :</p>
                            <h5 class="labelContent" id="totalAmt">(totalAmt)</h5>
                        </div>
                    </div>
                </article>
                <!-- This arrticle is hidden on mobile -->
                <article id="lunchbagMailingList" class="panel">
                    <p id="joinMsg">Want to stay up to date? We’d be happy to update you as new trucks or specials become available!</p>
                    <div id="mailCheckboxWide">
                        <p id="checkWide" >Sign up to for our mailing list:</p>
                        <input type="checkbox">
                    </div>
                </article>
            </div>
            <article id="lunchbagList" class="panel">
                <ul>
                    <li>
                        <img class="imgs" src="{{URL::asset('assets/IMGS/Menu/frittenwerk/classic-quebec-poutine.jpg')}}" alt="photo of classic poutine">
                        <div class="qtyCol">
                            <span class="plus">+</span>
                            <div class="qty">
                                (1)
                            </div>
                            <span class="minus">-</span>
                        </div>
                        <p class="foodName">Poutine, Québec Classic</p>
                        <h3>5,00€</h3>
                        <span class="ex">x</span>
                    </li>
                    <hr>
                    <li>
                        <img class="imgs" src="{{URL::asset('assets/IMGS/Menu/frittenwerk/montreal-style-poutine.jpg')}}" alt="photo of classic poutine">
                        <div class="qtyCol">
                            <span class="plus">+</span>
                            <div class="qty">
                                (2)
                            </div>
                            <span class="minus">-</span>
                        </div>
                        <p class="foodName">Poutine, Montreal Style</p>
                        <h3>11,00€</h3>
                        <span class="ex">x</span>
                    </li>
                    <hr>
                    <li>
                        <img class="imgs" src="{{URL::asset('assets/IMGS/Menu/frittenwerk/tijuana.jpg')}}" alt="photo of classic poutine">
                        <div class="qtyCol">
                            <span class="plus">+</span>
                            <div class="qty">
                                (1)
                            </div>
                            <span class="minus">-</span>
                        </div>
                        <p class="foodName">Tijuana Fries</p>
                        <h3>6,90€</h3>
                        <span class="ex">x</span>
                    </li>
                    <hr>
                </ul>
                <!-- This checkbox should be hidden on wider screens -->
                <div id="mailCheckbox">
                        <p id="check" >Sign up to for our mailing list:</p>
                        <input id="mobileCheckbox" type="checkbox">
                </div>
                <div id="extraBtns">
                    <button id="apple" class="checkoutButton" type="submit"><img class="btnIcons" src="{{URL::asset('assets/ICONS/LUNCHBAG/apple.svg')}}" alt="the icon for Apple">Apple Pay</button>
                    <button id="paypal" class="checkoutButton" type="submit"><img class="btnIcons" src="{{URL::asset('assets/ICONS/LUNCHBAG/icons8-paypal.svg')}}" alt="the icon for PayPal">PayPal</button>
                </div>
                <button id="checkout" class="checkoutButton" type="submit">Checkout</button>
            </article>
        </form>
    </section>
</main>
@endsection
