@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Truck Owner Dashboard')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/truckownerDashboard.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main>

    <h3> Hello, {{$truck->name}} </h3>

    <h4>ORDERS: </h4>

    <form id='searchForm' action="/truck/orderFilter" method="GET">
        @csrf
        <strong>Search orders:</strong>

        <fieldset>
            <label for="typeSearch">
                <input checked type="radio" name='typeSearch' value='user'> User:
            </label>

            <label for="firstName">First name:
                <input type="text" name='firstName' placeholder="John" value= {{ isset($request->firstName) ? $request->firstName : "" }}>
            </label>

            <label for="lastName">Last name:
                <input type="text" name='lastName' placeholder="Doe" value= {{ isset($request->lastName) ? $request->lastName : "" }}>
            </label>

            <label for="phone">Phone:
                <input type="tel" name='phone' placeholder="661123456" value= {{ isset($request->phone) ? $request->phone : "" }}>
            </label>

        </fieldset>


        <fieldset>

            <label for="typeSearch">
                <input {{ isset($request->typeSearch) && $request->typeSearch === 'date' ? "checked" : "" }} type="radio" name='typeSearch' value='date'> Date:
            </label>

            <label for="fromDate">From:
                <input type="date" name='fromDate' max="<?php echo date('Y-m-d') ?>" value= {{ isset($request->fromDate) ? $request->fromDate : date('Y-m-d')}} >
            </label>


            <label for="toDate">To:
                <input type="date" name='toDate' max="<?php echo date('Y-m-d') ?>" value= {{ isset($request->toDate) ? $request->toDate : date('Y-m-d')}} >
            </label>

        </fieldset>



        <fieldset>

            <label for="typeSearch">
                <input {{ isset($request->typeSearch) && $request->typeSearch === 'amount' ? "checked" : "" }} type="radio" name='typeSearch' value='amount'>
                Amount:
            </label>

            <label for="fromAmount">From:
                <input type="number" step="0.01" name='fromAmount' placeholder='€' value={{ isset($request->fromAmount) ? $request->fromAmount : ''}}>
            </label>


            <label for="toDate">To:
                    <input type="number" step="0.01" name='toAmount' placeholder='€€€€€' value={{ isset($request->toAmount) ? $request->toAmount : ''}}>
            </label>

        </fieldset>


        </form>

        <div class="desktop-btn">
            <input id='searchForm-search' form='searchForm' name='filterBtn' type="submit" value="Search">

            <form id='searchForm-showall' class='show-all' action="/truck">
                <input type="submit" value="Show all">
            </form>
        </div>


        {{-- MOBILE FORM --}}

        <form id='searchFormMobile' action="/truck/orderFilter" method="GET">

            <fieldset>
                <label class='label-radio-mobile' for="typeSearch">User:
                    <input onchange="user(this)" checked type="radio" name="typeSearch" value='user'>
                </label>

                <label class='label-radio-mobile' for="typeSearch">Date:
                    <input onchange="date(this)" type="radio" name="typeSearch" value='date' {{ isset($request->typeSearch) && $request->typeSearch === 'date' ? "checked" : "" }}>
                </label>

                <label class='label-radio-mobile' for="typeSearch">Amount:
                    <input onchange="amount(this)" type="radio" name="typeSearch" value='amount'{{ isset($request->typeSearch) && $request->typeSearch === 'amount' ? "checked" : "" }}>
                </label>

            </fieldset>
                <br>

                <div class="filter-user-mobile">

                    <label for="firstName">First name:
                        <input type="text" name='firstName' placeholder="John" value= {{ isset($request->firstName) ? $request->firstName : "" }}>
                    </label>

                    <label for="lastName">Last name:
                        <input type="text" name='lastName' placeholder="Doe" value= {{ isset($request->lastName) ? $request->lastName : "" }}>
                    </label>

                    <label for="phone">Phone:
                        <input type="tel" name='phone' placeholder="661123456" value= {{ isset($request->phone) ? $request->phone : "" }}>
                    </label>

                </div>

                <div class="filter-date-mobile">

                    <label for="fromDate">From:
                        <input type="date" name='fromDate' max="<?php echo date('Y-m-d') ?>" value= {{ isset($request->fromDate) ? $request->fromDate : date('Y-m-d')}} >
                    </label>


                    <label for="toDate">To:
                        <input type="date" name='toDate' max="<?php echo date('Y-m-d') ?>" value= {{ isset($request->toDate) ? $request->toDate : date('Y-m-d')}} >
                    </label>

                </div>

                <div class="filter-amount-mobile">
                    <label for="fromAmount">From:
                        <input type="number" name='fromAmount' placeholder='€' value={{ isset($request->fromAmount) ? $request->fromAmount : ''}}>
                    </label>


                    <label for="toDate">To:
                        <input type="number" name='toAmount' placeholder='€€€€€' value={{ isset($request->toAmount) ? $request->toAmount : ''}}>
                    </label>
                </div>

        </form>

        <div class="mobile-btn">
            <input id='searchFormMobile-search' form='searchFormMobile' type="submit" value="Search">

            <form id='searchFormMobile-showall' class='show-all' action="/truck">
                <input type="submit" value="Show all">
            </form>
        </div>


    @if(!empty($ordersCount))

    <table>

        <thead class="table-head">
            <tr>
                <th><strong>Order no.</strong></th>
                <th><strong>Date</strong></th>
                <th class='desktop-row'><strong>Amount</strong></th>
                <th class='desktop-row'><strong>Pre-Order?</strong></th>
                <th class='desktop-row'><strong>Order status</strong></th>
                <th><strong>Details</strong></th>
                <th><strong>Confirm</strong></th>
                <th class='desktop-row'><strong>Print</strong></th>
            </tr>
        </thead>

        @foreach ($orders as $order)

        <tr class="table-content">
            <td class='green'>{{$order->id_order}}</td>
            <td class='order-date'>{{$order->created_at}}</td>
            <td class='desktop-row'>{{$order->total}}€</td>
            <?php echo $order->pickup_time ? "<td class='order-date desktop-row'>" . $order->pickup_time . "</td>" : "<td class='red desktop-row'> N </td>" ?></td>

            {{-- ORDER STATUS --}}
            @switch($order->status)
                @case(0)
                    <td class='desktop-row waiting width'> WAITING </td>
                @break

                @case(1)
                    <td class='desktop-row green width '> ACCEPTED </td>
                @break

                @case(2)
                    <td class='desktop-row red width'> NOT ACCEPTED </td>
                @break

                @case(3)
                    <td class='desktop-row red width'> CANCELLED </td>
                @break

                @case(4)
                    <td class='desktop-row done width'> DELIVERED </td>
                @break
            @endswitch

            <td> <a class='view-details' href='#'>VIEW</a> </td>

            {{-- ORDER BUTTONS --}}
            @switch($order->status)
                @case(0)
                    <td> <form id='form_update' action='' method='post'> @csrf <input type='submit' name='updateBtn' class='update-order-btn accept-order' value='ACCEPT'> <input type='submit' name='cancelBtn' class='decline-order desktop-row' value='x'> <input type='hidden' name='hiddenId' value="{{$order->id_order}}"> </form></td>
                @break

                @case(1)
                    <td> <form id='form_update' action='' method='post'> @csrf <input type='submit' name='updateBtn' class='blue accept-order update-order-btn' value='DELIVERED'> <input type='submit' name='cancelBtn' class='decline-order desktop-row' value='x'> <input type='hidden' name='hiddenId' value="{{$order->id_order}}"> </form></td>
                @break

                @case(2)
                    <td class='not-accepted-order'> <a class='accepted-order disabled red' href='#'>NOT ACCEPTED</a> <a class='x-hidden decline-order desktop-row' href='#'>x</a></td>
                @break

                @case(3)
                    <td> <a class='red accepted-order disabled' href='#'> CANCELLED </a> <a class='x-hidden decline-order disabled-x desktop-row' href='#'>x</a></td>
                @break

                @case(4)
                    <td> <a class='black accepted-order disabled' href='#'> DELIVERED </a> <a class='x-hidden decline-order disabled-x desktop-row' href='#'>x</a></td>
                @break
            @endswitch

            <td class='desktop-row'><a href='#'> <img src="{{URL::asset('assets/ICONS/printer.svg')}}" alt="print image."> </a></td>
        </td>

        @endforeach
    </table>

    @else

    <h3 class='no-order'>No Orders found</h3>

    @endif

</main>

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/truckownerDashboard.js') }}"></script>
@endsection

@endsection
