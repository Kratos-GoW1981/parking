@extends('layouts.app')

@section('content')
<br>
<div class="background2">
    <br>
        <h1 class="section-heading" style="text-align:center; color: rgba(253,88,88,255); font-size: 60px; text-transform: capitalize; margin-bottom: 20px;">
            Our Services
        </h1>
        
    <center>
    <div class="row">
        <div class="column">
            <div class="card 10px">
                <div class="icon-wrapper">
                    <!-- <i class="fas fa-magnifier"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            
                <h3><a href="/home">Find Parking Space</h3>
                <p>
                    To find parking space near me.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                </div>
                
                <h3><a href="/vehicle_details">Book a parking area</a></h3>
                <p>
                    Customer can book the available parking area.
                </p>
            </div>
        </div>

        <!-- <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Reserve a parking area.</h3>
                <p>
                   To reserve a parking area near me.
                </p>
            </div>
        </div> -->

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Use Parking area.</h3>
                <p>
                 To use the designated parking area available.
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
                   To check  the invoice bill of the customer.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3><a href="/onlinepayment">Payment method</a></h3>
                <p>
                Customers can pay for service.
                Accepted payment methods may include cash,or mobile payments.
                </p>
            </div>
        </div>
        
    </div>
    </center>

    <br><br>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff1e00;"> <a href="/home" style="color: rgba(253,88,88,255);">Vehicle Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="" style="color:#ff1e00;"> Sanish Shrestha</a></p></center>
</div>
@endsection