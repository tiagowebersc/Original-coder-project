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
    <!-- Include variable for $username below -->
        <h3 id="main-title"> Hello, $name </h3>
        <div id="main-content">
            <section id="left-side">
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
                    <tr class="table-content">
                        <td class='green'>23</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>22</td>
                        <td class=''>21/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>21</td>
                        <td class=''>19/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>20</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>19</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>18</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>17</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>16</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>15</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                    <!-- Row 1 -->
                    <tr class="table-content">
                        <td class='green'>14</td>
                        <td class=''>22/08/2019</td>
                        <td class=''>Frittenwerk</td>
                        <td class='green'>29,80 €</td>
                        <td><input type='submit' name='updateBtn' class='update-order-btn accept-order' value='VIEW'></td>
                    </tr>
                </table>
            </div>
            </section>
            <section id="right-side">
                <img class="green_truck" src="{{URL::asset('assets/IMGS/green_truck.jpg')}}" alt="a girl serving food from a food truck">
            </section>
        </div>
    </main>
    <footer></footer>
</body>
</html>
