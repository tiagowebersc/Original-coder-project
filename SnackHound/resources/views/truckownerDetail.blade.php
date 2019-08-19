@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Order Detail')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/truckownerDetail.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main>

    <h3> Hello, {{$truck->name}}</h3>

    @if($order->status < 2)

    <form action="">
        <input class='accept-order' type="submit" value="Accept Order">
        <input class='decline-order' type="submit" value="DECLINE ORDER">
    </form>

    @endif

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
            <p class='info-label'>ID:</p>
            <p>{{$order->id_order}}</p>
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
                    <p>Waiting</p>
                    @break
                @case(1)
                    <p>Accepted</p>
                    @break
                @case(2)
                    <p>Not Accepted</p>
                    @break
                @case(3)
                    <p>Canceled</p>
                    @break
                @case(4)
                    <p>Delivered</p>
                    @break
            @endswitch
        </div>


</main>

@section('js')
{{-- <script type="text/javascript" src="{{ URL::asset('js/truckownerDashboard.js') }}"></script> --}}
@endsection

@endsection
