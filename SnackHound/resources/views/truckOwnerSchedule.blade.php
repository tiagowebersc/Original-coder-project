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
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
            </select>

            <div class='time-schedule'>
                <label for="fromTime"> From:<input required id='fromTime' name='fromTime' type="time"></label>
                <label for="toTime"> To:<input required id='toTime' name='toTime' type="time"></label>
            </div>

            <label for="location"> Location:<input required id='location' name='location' type="text"></label>
            <input type="submit" id='saveBtn' name='saveBtn' value="Save">
        </div>

        <input type="hidden" name="latitude" id='latitude'>
        <input type="hidden" name="longitude" id='longitude'>
        <input type="hidden" name="city" id='city'>

        <div class="submit-btn">
        </div>
        <div id='helper'></div>

    </form>
    <hr>

    {{-- DISPLAY SCHEDULES --}}
@foreach ($schedules as $schedule)

    <form class='show-schedule' method="post" action="/truck/schedule/info">
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
