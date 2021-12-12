@extends('Front-End.AdminLayout.main');
@section('main-container');
<div class="container">
 <br>

<form method="post" action="pass_submit"> 
    @csrf  
<div class="btn btn-success">{{session('msg')}}</div> <br>   
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>PassengerName</label>
<input type="text" name="passenger_name" class="form-control" placeholder="Enter PassengerName"/>    
</div> 


<div class="form-group">
<label>Passenger CNIC</label>
<input type="text" name="passenger_nic" class="form-control" placeholder="Enter Passenger NIC"/>    
</div>       


<div class="form-group">
<label>Contact Number</label>
<input type="text" name="contact_no" class="form-control" placeholder="Enter Passenger Contact Number"/>    
</div>       


<div class="form-group">
<label>Economy/Bussniess</label>
<select type="text" name="status" class="form-control" placeholder="Enter Passenger Status">
<option>Select status</option>
<option value="EconomyClass">EconomyClass</option>
<option value="BusniessClass">BusniessClass</option>
</select>    
</div>       
<div class="form-group">
<label>Departure Timimgs</label>
<input type="time" name="Departure_time" class="form-control" placeholder="Enter Departure Timings"/>    
</div>       



<div class="form-group">
<label>Arrival Timimgs</label>
<input type="time" name="arival_time" class="form-control" placeholder="Enter Arrival Timings"/>    
</div>       


<div class="form-group">
<label>Date</label>
<input type="Date" name="passenger_date" class="form-control" placeholder="Enter Date"/>    
</div>       
<br>
<div class="form-group">
<button type="submit" class="btn btn-success">Save</button>
</div>
</form>

<table class="table table-bordered">
<tr>
<th>ID</th>    
<th>passenger Name</th>
<th>passengerNic</th>
<th>contactno</th>
<th>status</th>
<th>DepartureTime</th>
<th>arrivaltime</th>
<th>passengerdate</th>
<th>Action</th>
<th>Action</th>
</tr>
@foreach($data as $value)
<tr>    
<td>{{$value->id}}</td>
<td>{{$value->passenger_name}}</td>
<td>{{$value->passenger_nic}}</td>
<td>{{$value->contact_no}}</td>
<td>{{$value->status}}</td>
<td>{{$value->Departure_time}}</td>
<td>{{$value->arival_time}}</td>
<td>{{$value->passenger_date}}</td>
<td><a href="Edit-passenger/{{$value->id}}" class="btn btn-Primary">Update</a></td>
<td><a href="delete-passenger/{{$value->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
@endsection