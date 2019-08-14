@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Truck Owner Dashboard')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/truckownerDashboard.css') }}" />

@endsection

@section('content')

<main>

    <h3> Hello, {{$truck->name}} </h3>

    <h4>ORDERS: </h4>

    <form action="">
        <label for=""><strong>Search orders:</strong></label>

        <fieldset>
            <label for="typeSearch">
                <input type="radio" name='typeSearch' value='user'> User:
            </label>

            <label for="firstName">First name:
                <input type="text" name='firstName' placeholder="John">
            </label>

            <label for="lastName">Last name:
                <input type="text" name='lastName' placeholder="Doe">
            </label>

            <label for="phone">Phone:
                <input type="tel" name='phone' placeholder="+351 123454678">
            </label>

        </fieldset>


        <fieldset>

            <label for="typeSearch">
                <input type="radio" name='typeSearch' value='date'> Date:
            </label>

            <label for="fromDate">From:
                <input type="date" name='fromDate' max="<?php echo date('d/m/Y') ?>" value="<?php echo date('d/m/Y') ?>">
            </label>


            <label for="toDate">To:
                <input type="date" name='toDate' max="<?php echo date('d/m/Y') ?>" value="<?php echo date('d/m/Y') ?>">
            </label>

        </fieldset>



        <fieldset>

                <label for="typeSearch">
                    <input type="radio" name='typeSearch' value='amount'>
                    Amount:
                </label>

                <label for="fromAmount">From:
                    <input type="number" name='fromAmount' placeholder='€'>
                </label>


                <label for="toDate">To:
                        <input type="number" name='toAmount' placeholder='€€€€€'>
                </label>

            </fieldset>

            <input type="submit" value="Search">
            <input type="submit" value="Show all">

    </form>

    <table>

        <thead class="table-head">
            <tr>
                <th><strong>Order no.</strong></th>
                <th><strong>Date</strong></th>
                <th><strong>Amount</strong></th>
                <th><strong>Payment Status</strong></th>
                <th><strong>Payment Type</strong></th>
                <th><strong>Pre-Order?</strong></th>
                <th><strong>Order status</strong></th>
                <th><strong>Details</strong></th>
                <th><strong>Accept</strong></th>
                <th><strong>Print</strong></th>
            </tr>
        </thead>

        @foreach ($orders as $order)
        <tr class="table-content">
            <td>{{$order->id_order}}</td>
            <td>{{$order->id_order}}</td>
            <td>{{$order->id_order}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </td>

        @endforeach

        {{-- <p><img src="{{URL::asset('assets/ICONS/printer.svg')}}" alt=""></p> --}}
    </table>







</main>

@endsection
