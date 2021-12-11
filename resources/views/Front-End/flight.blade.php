@extends('Front-End.AdminLayout.main');

@section('main-container');


<div class="container">
 <br>

<form method="post" action="flight_submit"> 
    @csrf  
<div class="btn btn-success">{{session('msg')}}</div> <br>   
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>FlightName</label>
<input type="text" name="FlightName" class="form-control" placeholder="Enter FlightName"/>    
</div> 

<div class="form-group">
<label>PersonName</label>
<input type="text" name="PersonName" class="form-control" placeholder="Enter PersonName"/>    
</div>



<div class="form-group">
<label>TicketNO </label>
<input type="text" name="Ticket_NO" class="form-control" placeholder="Enter Ticket_NO"/>    
</div>


<div class="form-group">
<label>Status</label>
<input type="text" name="Status" class="form-control" placeholder="EnterStatus"/>    
</div>



<div class="form-group">
<label>From Destination</label>
<input type="text" name="From_Destination" class="form-control" placeholder="Enter FromDestination"/>    
</div>



<div class="form-group">
<label>To Destination</label>
<input type="text" name="To_Destination" class="form-control" placeholder="Enter ToDestination"/>    
</div>



<div class="form-group">
<label>Flight Timings</label>
<input type="time" name="Flight_timings" class="form-control" placeholder="Enter Flight timings"/>    
</div>



<div class="form-group">
<label>Arrival Timings</label>
<input type="time" name="Arrival_timings" class="form-control" placeholder="Enter Arriva timings"/>    
</div>

<br>
<div class="form-group">
<button type="submit" class="btn btn-success">Save</button>
</div>

@endsection






