@extends('layouts.app')

@section('content')
<br><br><br><br>

<div class="login-box">

  <h2>Reserve a Parking Space</h2>
    <form action="/reserved/parking" method="POST">
      @csrf
        <div class="user-box">
          <input type="text" name="vehicle_name" required="">
          <label>Vehicle Name : </label>
        </div>

        <div class="user-box">
          <input type="Text" name="vehicle_number" required="">
          <label>Vehicle Number : </label>
        </div>

        <div class="user-box">
          <input type="number" name="parkinglot" required="">
          <label>Parking lot (P) : </label>
        </div>

        <div class="user-box">
          <input type="date" name="date" required="">
          <label>Date : </label>
        </div>

        <div class="user-box">
          <input type="time" name="from_time" required="">
          <label>From (Time) : </label>
        </div>

        <div class="user-box">
          <input type="time" name="to_time" required="">
          <label>To (Time) : </label>
        </div>

        <a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <center>Let's Reserve the parking space</center>
        </a>
    </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
<center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>
@endsection