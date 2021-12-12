@extends('Front-End.AdminLayout.main');

@section('main-container');
<div class="container">
 <br>
<form method="post" action="Ticket_submit"> 
    @csrf  
<div class="btn btn-success">{{session('msg')}}</div> <br>   
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" name="Name" class="form-control" placeholder="Enter Name"/>    
</div> 

<div class="form-group">
<label>FlightName</label>
<input type="text" name="FlightName" class="form-control" placeholder="Enter FlightName"/>    
</div> 

<div class="form-group">
<label>Ticket No</label>
<input type="text" name="Ticket_No" class="form-control" placeholder="Enter Ticket_No"/>    
</div>



<div class="form-group">
<label>status</label>
<input type="text" name="status" class="form-control" placeholder="Enter status"/>    
</div>



<div class="form-group">
<label>Flight Amount</label>
<input type="number" name="Flight_Amount" class="form-control" placeholder="Enter FlightAmount"/>    
</div>

<br>
<div class="form-group">
<Button type="submit" class="btn btn-success">Save</Button>    
</div>    
</div>

<table class="table table-bordered">
<tr>
<th>ID</th>    
<th>Name</th>
<th>FlightName</th>
<th>TicketNo</th>
<th>status</th>
<th>Flight Amount</th>
<th>Action</th>
<th>Action</th>
</tr>
@foreach($data as $value)
<tr>
<td>{{$value->id}}</td>
<td>{{$value->Name}}</td>
<td>{{$value->FlightName}}</td>
<td>{{$value->Ticket_No}}</td>
<td>{{$value->status}}</td>
<td>{{$value->Flight_Amount}}</td>
<td><a href="Edit-Ticket/{{$value->id}}" class="btn btn-Primary">Edit</a></td>
<td><a href="Delete-Ticket/{{$value->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach




@endsection