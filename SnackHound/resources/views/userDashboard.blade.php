@extends('layouts.userSidebar')

@section('title', 'SnackHound - User Dashboard')

@section('css')

    <link rel="stylesheet" href="{{ URL::asset('css/userDashboard.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

</head>
<body>
    <main>
    <!-- Include variable for $username below -->
        <h3 id="main-title"> Hello, {{ $name  }}</h3>
        <div id="main-content">
            <section id="left-side">
                <h4 id="orderHistory">ORDERS : </h4>

                <form id='searchForm' method="GET">
                @csrf
                    <strong>Search orders by:</strong>

                    <!-- Field for ORDER ID -->
                    <div id="formSets">
                        <fieldset>
                            <label for="typeSearch">
                                <input checked type="radio" name='typeSearch' value='id'> Order ID:
                                <input id="orderInput" type="number" name='orderID' placeholder="3" value= "">
                            </label>
                        </fieldset>

                        <!-- Field for date ordered -->
                        <fieldset>
                            <label for="typeSearch">
                                <input type="radio" name='typeSearch' value='date'>Date Ordered:
                            </label>
                            <div id="dateInput">
                                <label for="dateInput">
                                    <input type="date" name='dateInput' max="<?php echo date('Y-m-d') ?>" value="">
                                </label>
                                <img class="calendarIcon" src="{{URL::asset('assets/ICONS/USER SETTINGS/calendarIconColored.svg')}}" alt="a calendar">
                            </div>
                        </fieldset>

                        <!-- Field for business name -->
                        <fieldset>
                            <label for="typeSearch">
                                <input type="radio" name='typeSearch' value=''>
                                Business Name:
                            </label>
                            <label for="businessName">Name:
                                <input id="businessInput" type="text" name='businessName' placeholder='name of business' value="">
                            </label>
                        </fieldset>
                    </div>
                    <!-- Submit buttons for the form -->
                    <div class="desktop-btn">
                        <input id='searchForm-search' form='searchForm' name='filterBtn' type="submit" value="Search">
                        <input id='searchForm-showall' form='searchForm' name='filterBtn' type="submit" value="Show All">
                    </div>
                </form>

                <hr>

            <div id="table">
                <!-- Table -->
                <table>
                    <thead class="table-head">
                        <tr>
                            <th><strong>Order ID</strong></th>
                            <th><strong>Date Ordered</strong></th>
                            <th><strong>Business Name</strong></th>
                            <th><strong>Order Cost</strong></th>
                            <th><strong>View Details</strong></th>
                        </tr>
                    </thead>
                    <!-- Row 1 -->
                    <?php
                        foreach ($orders as $order) {
                           ?>
                    <tr class="table-content">
                        <td class='green'>{{ $order->id_order }}</td>
                        <td class=''>{{ $order->created_at }}</td>
                        <td class=''>{{ $order->truckName }}</td>
                        <td class='green'>{{ $order->orderSum }}</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                           <?php
                        }
                    ?>

                </table>
            </div>
            </section>
            <section id="right-side">
                <img class="green_truck" src="{{URL::asset('assets/IMGS/green_truck.jpg')}}" alt="a girl serving food from a food truck">
            </section>
        </div>
    </main>

    @section('js')
    <script type="text/javascript" src="{{ URL::asset('js/truckownerDashboard.js') }}"></script>
    @endsection

@endsection

    <footer></footer>
</body>
</html>
