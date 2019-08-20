@extends('layouts.customerSidebar')

@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/adminedit.css')}}" />
@endsection


@section('content')
<div class="background">

    <h1> Hello, Administrator</h1>
    <section>
        <div class="mainForm" name="mainForm">
            <h2>USERS:</h2>
            <h3>Search users:</h3>
            <form action="" method="POST">
                <div class="userContact">
                    <input type="checkbox">User:
                    First Name: <input type="text">
                    Last Name: <input type="text">
                    Email: <input type="email">
                    User ID: <input type="number">
                </div>
                <div class="userDate">
                    <input type="checkbox">Date Created:
                    From: <input type="date">
                    To: <input type="date">
                </div>
                <div class="buisnessUser">
                    <input type="checkbox">Buisness Name:
                    Name: <input type="text">
                </div>
                <div class="submitBtn">
                    <input type="submit" value="Search">
                    <input type="submit" value="Show All">
                </div>
            </form>
        </div>
    </section>
    
    <hr class="separator">

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">User ID</th>
                                <th class="column2">Last Name</th>
                                <th class="column3">First Name</th>
                                <th class="column4">Email</th>
                                <th class="column5">Date Created</th>
                                <th class="column6">Business Account</th>
                                <th class="column7">Profil</th>
                                <th class="column8">Reviews</th>
                                <th class="column9">Block User</th>
                                <th class="column10">Remove User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column1">1</td>
                                <td class="column2">Lee</td>
                                <td class="column3">Alex</td>
                                <td class="column4">Lee.A@mail.com</td>
                                <td class="column5">14/08/2019</td>
                                <td class="column6">N</td>
                                <td class="column7"><input class="viewBtn" type="submit" value="VIEW"></td>
                                <td class="column8"><input class="viewBtn2" type="submit" value="VIEW"></td>
                                <td class="column9"><input class="blockBtn" type="submit" value="BLOCK"></td>
                                <td class="column10"><input class="deleteBtn" type="submit" value="DELETE"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection