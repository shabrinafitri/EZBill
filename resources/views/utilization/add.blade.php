@extends('layouts.admin-app')
@section('title','ADD UTILIZATION')
@section('content')
<section class="content">
	<div class="row">
    	<div class="col-xs-12">
      		<div class="box box-info">
				<div class="box-header with-border">
			    	<h3 class="box-title">Add Utilization</h3>
			  	</div>
  				<form class="form-horizontal" method="POST" action="{{ route('admin.save.utilization') }}">
	     			{{ csrf_field() }}
	    		<div class="box-body">
			      	<div class="form-group">
				       	<label for="name" class="col-sm-2 control-label">Customer Name</label>
			        	<div class="col-sm-10">
			          		<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="id_customer">
				           	<option selected>Choose One</option>
				           	@foreach($customer as $key)
				           	<option value="{{$key->id_customer}}">{{$key->name}}</option>
				           	@endforeach
				          	</select>
				        </div>
				    </div>    
				    <div class="form-group">
				       	<label for="month" class="col-sm-2 control-label">Month</label>
				       	<div class="col-sm-10">
				        	<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="month">
				            	<option value="January">January</option>
				            	<option value="February">February</option>
				            	<option value="March">March</option>
				            	<option value="April">April</option>
				            	<option value="May">May</option>
				            	<option value="June">June</option>
				            	<option value="July">July</option>
				            	<option value="August">August</option>
				            	<option value="September">September</option>
				            	<option value="October">October</option>
				            	<option value="November">November</option>
				            	<option value="December">December</option>
				          	</select>
				        </div>
				    </div>
				   	<div class="form-group">
	        			<label for="year" class="col-sm-2 control-label">Year</label>
	        			<div class="col-sm-10">
	         				<input type="number" class="form-control" name="year" id="year" placeholder="Year">
	        			</div>
	      			</div>
	      			<div class="form-group">
	        			<label for="initial_meter" class="col-sm-2 control-label">Initial Stand Meter</label>
	        			<div class="col-sm-10">
	         				<input type="number" class="form-control" name="initial_meter" id="initial_meter" placeholder="Eg. 21849">
	        			</div>
	      			</div>
	      			<div class="form-group">
	        			<label for="final_meter" class="col-sm-2 control-label">Final Stand Meter</label>
	        			<div class="col-sm-10">
	         				<input type="number" class="form-control" name="final_meter" id="final_meter" placeholder="Eg. 22149">
	        			</div>
	      			</div>
	      			<input type="hidden" name="status" value="1">
    			</div>
    			<div class="box-footer">
      				<button type="submit" class="btn btn-info pull-right">Add Utilization</button>
    			</div>
  			</form>
		</div>
    </div>
</section>
@endsection