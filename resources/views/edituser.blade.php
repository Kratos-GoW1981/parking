@extends('layouts.app')
@section('content')
<br><br>
<div class="background">
<div class="login-box">
<h2>Edit User Details</h2>
<form action="" method="post">
    @csrf 
    <strong>UserName : </strong>
    <input type="text" id="name" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
    <strong>Vehicle Name : </strong>
    <input id="vehicle name" type="text" name="vehicle_name"  placeholder="Enter your vehicle name"/>
    <strong>Vehicle Number : </strong>
    <input type="text" name="vehicle_number" placeholder="Enter the vehicle number" value ="">
    <strong>Parking lot (P) : </strong>
      <input type="number" name="" required="">
    <button type="submit"> Update Details </button>
</form>
</div>
</div>

@endsection



