@extends('layouts.truckownerSidebar')

@section('title', 'SnackHound - Truck Schedule')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/truckownerSchedule.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

@endsection

@section('content')

<main>
    <h3>Hello, {{$truck->name}}</h3>

    <h4>Schedule:</h4>

<form class='edit-schedule' id='edit-schedule-form' action="/truck/schedule" method='POST'>
    @csrf
        <div class='info-schedule'>
            <select name="dayWeek" id="">

                @if ($scheduleEdit->weekday === 0)
                    <option selected value="monday">Monday</option>
                @else
                    <option value="monday">Monday</option>
                @endif

                @if ($scheduleEdit->weekday === 1)
                    <option selected value="tuesday">Tuesday</option>
                @else
                    <option value="tuesday">Tuesday</option>
                @endif

                @if ($scheduleEdit->weekday === 2)
                    <option selected value="wednesday">Wednesday</option>
                @else
                    <option value="wednesday">Wednesday</option>
                @endif

                @if ($scheduleEdit->weekday === 3)
                    <option selected value="thursday">Thursday</option>
                @else
                    <option value="thursday">Thursday</option>
                @endif

                @if ($scheduleEdit->weekday === 4)
                    <option selected value="friday">Friday</option>
                @else
                    <option value="friday">Friday</option>
                @endif

                @if ($scheduleEdit->weekday === 5)
                    <option selected value="saturday">Saturday</option>
                @else
                    <option value="saturday">Saturday</option>
                @endif

                @if ($scheduleEdit->weekday === 6)
                    <option selected value="sunday">Sunday</option>
                @else
                    <option value="sunday">Sunday</option>
                @endif

            </select>

            <div class='time-schedule'>
                <label for="fromTime"> From:<input required id='fromTime' name='fromTime' type="time" value='{{$scheduleEdit->start_time}}'></label>
                <label for="toTime"> To:<input required id='toTime' name='toTime' type="time" value='{{$scheduleEdit->end_time}}'></label>
            </div>

            <label for="location"> Location:<input required id='location' name='location' type="text" value='{{$scheduleEdit->address}}'></label>
            <input type="submit" id='saveBtn' name='saveBtn' value="Save">
        </div>

        <input type="hidden" value='{{$scheduleEdit->latitude}}' name="latitude" id='latitude'>
        <input type="hidden" value='{{$scheduleEdit->longitude}}' name="longitude" id='longitude'>
        <input type="hidden" value='{{$scheduleEdit->id_schedule}}' name="scheduleId" id='scheduleId'>
        <input type="hidden" name="city" id='city'>


        <div id='helper'></div>

    </form>
    <hr>

    {{-- DISPLAY SCHEDULES --}}

    @foreach ($schedules as $schedule)
        @if($schedule->id_schedule === $scheduleEdit->id_schedule)
            <form class='show-schedule selected' method="post" action="/truck/schedule/info">
        @else
            <form class='show-schedule' method="post" action="/truck/schedule/info">
        @endif

        @csrf

        @switch($schedule->weekday)

        @case(0)
            <p class='display-weekday'>Monday:</p>
            @break
        @case(1)
            <p class='display-weekday'>Tuesday:</p>
            @break
        @case(2)
            <p class='display-weekday'>Wednesday:</p>
            @break
        @case(3)
            <p class='display-weekday'>Thursday:</p>
            @break
        @case(4)
            <p class='display-weekday'>Friday:</p>
            @break
        @case(5)
            <p class='display-weekday'>Saturday:</p>
            @break
        @case(6)
            <p class='display-weekday'>Sunday:</p>
            @break

        @endswitch
        <p class='display-time'>{{$schedule->start_time}} - {{$schedule->end_time}}</p>
        <p class='display-city'>{{$schedule->city}}</p>
        <input type="hidden" name='scheduleId' value='{{$schedule->id_schedule}}'>
        <div class='display-btn'>
            <input class='editBtn' type="submit" name='editBtn' value="Edit">
            <input class='deleteBtn' type="submit" name='deleteBtn' value="Delete">
        </div>

    </form>

@endforeach
</main>

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/truckownerSchedule.js') }}"></script>
@endsection

@endsection
