@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            	<div class="card-header"><big><b>{{$scheduledFlight->starta->name}} --> {{$scheduledFlight->desta->name}}</b></big></div>
            	<div class="card-body card-bg" >
	            	<div class="row">
	            		<div class="col-md-6">
	            			<label>Date of Departure</label>
	            			<big>{{$scheduledFlight->dod}}</big>
	            			<br>
	            			<label>Time of Departure</label>
	            			<big>{{$scheduledFlight->tod}}</big>
	            		</div>
	            		<div class="col-md-6">
	            			<label>Date of Arrival</label>
	            			<big>{{$scheduledFlight->doa}}</big>
	            			<br>
	            			<label>Time of Arrival</label>
	            			<big>{{$scheduledFlight->toa}}</big>
	            		</div>
	            	</div>
	            	<form id="create_booking" method="post" action="/bookings" class="form" >
	            		{{ csrf_field() }}
	            		<div class="row">
		            		<div class="col-md-4">
		            		<label>Economy</label>
		            		<select name="economy" id="dest" class="form-control form-control-lg" required>
	                            @for ($i = 0; $i <= $economy; $i++)
	                            <option value={{$i}}>{{$i}}</option>
	                            @endfor
	                        </select>
	                    	</div>
	                    	<div class="col-md-4">
	                        <label>Business</label>
		            		<select name="business" id="dest" class="form-control form-control-lg" required>
	                            @for ($i = 0; $i <= $business; $i++)
	                            <option value={{$i}}>{{$i}}</option>
	                            @endfor
	                        </select>
	                    	</div>
	                    	<div class="col-md-4">
	                        <label>First class</label>
		            		<select name="firstclass" id="dest" class="form-control form-control-lg" required>
	                            @for ($i = 0; $i <= $firstclass; $i++)
	                            <option value={{$i}}>{{$i}}</option>
	                            @endfor
	                        </select>
	                        <input type="hidden" name="flight[]" value="{{$scheduledFlight}}">
	                    	</div>
		            	</div>
	            	</form>
	            	
	            	<br>
	            	<button class="btn btn-primary" typr="submit" style="float:right" form="create_booking">Book </button>
            	</div>
            </div> 
        </div>
    </div>
</div>

@endsection
