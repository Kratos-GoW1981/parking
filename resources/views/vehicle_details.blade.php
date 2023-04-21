@extends('parkings.layout')
@section('content')    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>Vehicle details</strong></h1>
            <br>
            <br>
            <h2><a href="/edituser">Edit User Details</h2>
        </div>
    </div>
</div>

   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-control">
<div class="pull-right">
            <a class="btn btn-primary" href="/home"> Back</a>
        </div>
<form class="box" id="form"  action="/vehicle" method="post">
            @csrf
            <fieldset>
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicle Name:</strong>
                <input id="vehicle name" type="text" name="vehicle_name"  placeholder="Enter your vehicle name"/>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicle Number:</strong>
                <input id="vehicle number" type="text" name="vehicle_number"  placeholder="Enter your vehicle number">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Parking lot (P) : </strong>
      <input type="number" name="" required="">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <br>
                <!-- $ldate = date('Y-m-d H:i:s'); -->
                <input type="date" id="start" name="trip-start"
       value="2022-04-28"
       min="2022-01-01" max="2022-12-31">
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Check In:</strong>
                <br>
                <input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Check Out:</strong>
                <br>
                <input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>
            </div>
                <button type="submit"><strong>Reserve a parking space</strong></button>
        </div>
    </div>
    
</div>
</div>
</div>
</fieldset>

   
</form>


@endsection
