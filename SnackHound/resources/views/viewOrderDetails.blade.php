@extends('layouts.userSidebar')

@section('title', 'SnackHound - Order Details')

@section('css')


<link rel="stylesheet" href="{{ URL::asset('css/truckownerDetail.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main>

    <section>
        <?php $total = 0 ?>
        @foreach ($orderItems as $item)
            <div class='row'>
                <span class='row-item row-quantity'><strong class='strong-quantity'> {{$item->quantity}} </strong>  </span>
                <span class='row-item row-name'><strong> {{$item->name}} </strong> </span>
                <span class='row-item row-price'><strong> {{number_format($item->price, 2)}} € </strong> </span>
                <?php $total += ($item->quantity * $item->price) ?>
            </div>
        @endforeach
            <div class='row row-total'>
                <span class='row-item-total'><h4>Total:</h4></span>
                <span class='row-item-total row-total-value'><h4>{{number_format($total, 2)}} €</h4></span>
            </div>
    </section>

    <div class='order-info'>

        <div>
            <p class='info-label'>Order id:</p>
            <p>{{$order->id_order}}</p>
        </div>


        <div>
            <p class='info-label'>Food Truck:</p>
            <p>{{$truck->name}}</p>
        </div>

        <div>
            <p class='info-label'>Contact:</p>
            <p>{{$truck->telephone}}</p>
        </div>

        <div>
            <p class='info-label'>Date:</p>
            <p>{{$order->created_at}}</p>
        </div>

        <div>
            <p class='info-label'>Payment Type:</p>
            <p>Payment at pickup</p>
        </div>

        <div>
            <p class='info-label'>Pre-order:</p>
            @if($order->pickup_time)
            <p>{{$order->pickup_time }}</p>
            @else
            <p>N</p>
            @endif
        </div>

        <div>
            <p class='info-label'>Status:</p>

            @switch($order->status)
                @case(0)
                    <p class='waiting'>Waiting</p>
                    @break
                @case(1)
                    <p class='green'>Accepted</p>
                    @break
                @case(2)
                    <p class='red'>Not Accepted</p>
                    @break
                @case(3)
                    <p class='red'>Canceled</p>
                    @break
                @case(4)
                    <p class='done'>Delivered</p>
                    @break
            @endswitch
        </div>


</main>

@endsection
