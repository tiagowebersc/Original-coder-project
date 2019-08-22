<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/userDashboard.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">
    <title>User Settings Page</title>
</head>
<body>
    <main>
    <!-- Includ variable for $username below -->
        <h3> Hello, $name </h3>
        <h4>ORDER HISTORY : </h4>

        <form id='searchForm' method="GET">
        @csrf
            <strong>Search orders:</strong>

            <!-- Field for ORDER ID -->
            <fieldset>
                <label for="typeSearch">
                    <input checked type="radio" name='typeSearch' value='id'> Order ID:
                    <input type="number" name='orderID' placeholder="3" value= "">
                </label>
            </fieldset>

            <!-- Field for date ordered -->
            <fieldset>
                <label for="typeSearch">
                    <input type="radio" name='typeSearch' value='date'>Date Ordered:
                </label>
                <label for="dateInput">
                    <input type="date" name='dateInput' max="<?php echo date('Y-m-d') ?>" value="">
                </label>
                <img class="calendarIcon" src="{{URL::asset('assets/ICONS/USER SETTINGS/calendarIconColored.svg')}}" alt="a calendar">
            </fieldset>

            <!-- Field for business name -->
            <fieldset>
                <label for="typeSearch">
                    <input type="radio" name='typeSearch' value=''>
                    Business Name:
                </label>
                <label for="businessName">Name:
                    <input type="text" name='businessName' placeholder='name of business' value="">
                </label>
            </fieldset>
            <!-- Submit buttons for the form -->
            <div class="desktop-btn">
                <input id='searchForm-search' form='searchForm' name='filterBtn' type="submit" value="Search">

                <form id='searchForm-showall' class='show-all' action="/truck">
                    <input type="submit" value="Show All">
                </form>
            </div>
        </form>

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
        </table>

    </main>
    <footer></footer>
</body>
</html>