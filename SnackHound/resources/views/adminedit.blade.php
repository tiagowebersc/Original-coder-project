@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Truck Edit Dashboard')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/truckownerDashboard.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main>

    <h3> Hello, name </h3>

    <h4>USERS: </h4>

    <form id='searchForm' action="/truck/orderFilter" method="GET">
        @csrf
        <strong>Search users:</strong>

        <fieldset>
            <label for="typeSearch">
                <input checked type="radio" name='typeSearch' value='user'> User:
            </label>

            <label for="firstName">First name:
                <input type="text" name='firstName' placeholder="John" value="">
            </label>

            <label for="lastName">Last name:
                <input type="text" name='lastName' placeholder="Doe" value="">
            </label>

            <label>Email:
                <input type="email" name='email' placeholder="john@mail.com" value= "">
            </label>

            <label>User ID:
                <input type="number" name='userid' placeholder="3" value= "">
            </label>

        </fieldset>


        <fieldset>

            <label for="typeSearch">
                <input type="radio" name='typeSearch' value='date'>Date Created:
            </label>

            <label for="fromDate">From:
                <input type="date" name='fromDate' max="<?php echo date('Y-m-d') ?>" value="">
            </label>


            <label for="toDate">To:
                <input type="date" name='toDate' max="<?php echo date('Y-m-d') ?>" value= "" >
            </label>

        </fieldset>



        <fieldset>

            <label for="typeSearch">
                <input type="radio" name='typeSearch' value=''>
                Business Name:
            </label>

            <label for="fromAmount">Name:
                <input type="text" name='buisname' placeholder='Business Name' value="">
            </label>

        </fieldset>


        </form>

        <div class="desktop-btn">
            <input id='searchForm-search' form='searchForm' name='filterBtn' type="submit" value="Search">

            <form id='searchForm-showall' class='show-all' action="/truck">
                <input type="submit" value="Show All">
            </form>
        </div>


        {{-- MOBILE FORM --}}

        <form id='searchFormMobile' action="/truck/orderFilter" method="GET">

            <fieldset>
                <label class='label-radio-mobile' for="typeSearch">User:
                    <input onchange="user(this)" checked type="radio" name="typeSearch" value='user'>
                </label>

                <label class='label-radio-mobile' for="typeSearch">Date Created:
                    <input onchange="date(this)" type="radio" name="typeSearch" value='date'>
                </label>

                <label class='label-radio-mobile' for="typeSearch">Business Name:
                    <input onchange="amount(this)" type="radio" name="typeSearch" value='Business Name'>
                </label>

            </fieldset>
                <br>

                <div class="filter-user-mobile">

                    <label for="firstName">First name:
                        <input type="text" name='firstName' placeholder="John" value="">
                    </label>

                    <label for="lastName">Last name:
                        <input type="text" name='lastName' placeholder="Doe" value="">
                    </label>

                    <label>Email:
                        <input type="email" name='email' placeholder="john@mail.com" value= "">
                    </label>
        
                    <label>User ID:
                        <input type="number" name='userid' placeholder="3" value= "">
                    </label>

                </div>

                <div class="filter-date-mobile">

                    <label for="fromDate">From:
                        <input type="date" name='fromDate' max="<?php echo date('Y-m-d') ?>" value='Y-m-d' >
                    </label>


                    <label for="toDate">To:
                        <input type="date" name='toDate' max="<?php echo date('Y-m-d') ?>" value='Y-m-d' >
                    </label>

                </div>

                <div class="filter-amount-mobile">
                    <label for="fromAmount">Name: 
                        <input type="textarea" name='' placeholder='Business Name' value=''>
                    </label>
                </div>

        </form>

        <div class="mobile-btn">
            <input id='searchFormMobile-search' form='searchFormMobile' type="submit" value="Search">

            <form id='searchFormMobile-showall' class='show-all' action="/truck">
                <input type="submit" value="Show all">
            </form>
        </div>


    <table>

        <thead class="table-head">
            <tr>
                <th><strong>User ID</strong></th>
                <th><strong>Last Name</strong></th>
                <th class='desktop-row'><strong>First Name</strong></th>
                <th class='desktop-row'><strong>Email</strong></th>
                <th class='desktop-row'><strong>Date Created</strong></th>
                <th><strong>Business Account</strong></th>
                <th><strong>Profil</strong></th>
                <th><strong>Reviews</strong></th>
                <th><strong>Block User</strong></th>
                <th><strong>Remove User</strong></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>User Id</td>
                <td>Doe</td>
                <td>John</td>
                <td>john@mail.com</td>
                <td>Date</td>
                <td>N</td>
                <td><input class="" type="button" value="VIEW"></td>
                <td><input class="" type="button" value="VIEW"></td>
                <td><input class="" type="button" value="BLOCK"></td>
                <td><input class="" type="button" value="DELETE"></td>
            </tr>
            
        </tbody>
            {{-- ORDER STATUS --}}
            
    
            {{-- ORDER BUTTONS --}}


    </table>

</main>

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/truckownerDashboard.js') }}"></script>
@endsection

@endsection