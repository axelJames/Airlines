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
	            	<form id="make_booking" method="post" action="/payments" class="form" >
	            		{{ csrf_field() }}
	            		<div class="row">
		            		<div class="col-md-4">
		            		<label>Payment Method</label>
		            		<select name="cash" id="dest" class="form-control form-control-lg" required>
	                            <option value="Y">Cash</option>
	                            <option value="N">Bank</option>
	                        </select>
	                    	</div>
	                    	<div class="col-md-6">
	                        <label>Bank name</label>
	                        <input type="text" name="bank" class="form-control">
	                    	</div>
	                    	<input type="hidden" name="economy" value={{$economy}}>
	                    	<input type="hidden" name="business" value={{$business}}>
	                    	<input type="hidden" name="firstclass" value={{$firstclass}}>
	                    	<input type="hidden" name="total" value={{$total}}>
	                        <input type="hidden" name="flight" value="{{json_encode($scheduledFlight)}}">
	                    	</div>
		            	</div>
		            	<hr>

		            	
	            	</form>
	            	
	            	<div class="col-md-11">
	            		<div style="float:right"><big><b>Total &nbsp</b></big><big><big>{{$total}}</big></big></div>
	            		<br>
	            		<br>
	            		<button class="btn btn-primary" type="submit" style="float:right" form="make_booking">Pay </button>
	            		<br>
	            	</div>
	            	
            	</div>
            </div> 
        </div>
    </div>
</div>

@endsection
