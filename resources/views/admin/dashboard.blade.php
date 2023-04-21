@extends('layouts.app')

@section('content')
<br><br>

        <h1 class="section-heading" style="text-align:center; color: rgba(253,88,88,255); font-size: 60px; text-transform: capitalize; margin-bottom: 20px;">
            ADMIN DASHBOARD
        </h1>
        
    <center>
    <li>
        
    <!-- <div class="row">
        <div class="column">
    <div class="card 10px">
    <a href="/vehicle_details">
    <div class="icon-wrapper">
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
<h3>VEHICLE DETAILS</h3>
</a>
</div>
</div> -->
<div class="row">
        <div class="column">
            <div class="card 10px">
                <a href="/registeredvehicle">
                <div class="icon-wrapper">
                    <!-- <i class="fas fa-magnifier"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            
                <h3>ALL Registered Vehicle</h3>
                <p>
                    All registered vehicle of user are given in the admin page.
                </p>
            </a>
            </div>
        </div>
        <div class="column">
            <div class="card 10px">
                <a href="/parkinglotdetails">
                <div class="icon-wrapper">
                    <!-- <i class="fas fa-magnifier"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            
                <h3>Parking lot details</h3>
                <p>
                    Check the parking lot details here.
                </p>
            </a>
            </div>
        </div>

        <!-- <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                    <i class="fa-solid fa-magnifying-glass"></i> 
                
                <h3>Book a parking area</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Reserve a parking area.</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Use Parking area.</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Check invoice bill</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Payment method</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
        </div> -->
        
    </div>
    </center>
    <br><br><br><br>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Vehicle Parking</a> &copy; Copyright 2022, All Rights Reserved</p></center>

@endsection