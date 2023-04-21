@extends('layouts.app')

@section('content')
<br>
<div class="background2">
    <section class="about">
        
        <div class="main">
        <img src="/images/parking.jpg" alt="Background Image width="800" height="800""/>
            <div class="about-text">
                <h1>About us</h1>
                
                <p>
                Parking of vehicle is one of the basic necessities required in a city. Vehicle Parking is used for managing the records of the incoming and outgoing vehicles in a
                Kathmandu. It is easy for Admin to retrieve the data if the vehicle has been visited
                through number he can get that data. Nowadays many people visiting places are facing
                problem of vehicle parking.
                <br><br>
                The objective of this project is to build a Parking management system that enables the time
                management and control of vehicles using number plate recognition. It is a system that will
                track the entry and exit of cars, maintain a listing of cars within the parking lot. This system can maintain the records
                in a short period of time. It will determine the cost of per vehicle according to their time
                consumption.
                </p>
                <a href="/home"><button>Know more</button></a>
            </div>
</div>
    </section>
</div>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Vehicle Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="#"> Sanish Shrestha</a></p></center>
@endsection