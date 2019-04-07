@extends('layouts.admin-app')
@section('title','EDIT UTILIZATION')
@section('content')
<section class="content">
	<div class="row">
    	<div class="col-xs-12">
      		<div class="box box-info">
				<div class="box-header with-border">
			    	<h3 class="box-title">Edit Utilization</h3>
			  	</div>
  				<form class="form-horizontal" method="POST" action="{{ route('admin.update.utilization') }}">
	     			{{ csrf_field() }}
	     		<input type="hidden" name="id" value="{{$utilization->id}}">
	     		<input type="hidden" name="id_customer" value="{{$utilization->id_customer}}">
	    		<div class="box-body">
			      	<div class="form-group">
				       	<label for="month" class="col-sm-2 control-label">Month</label>
				       	<div class="col-sm-10">
				        	<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="month">
				        		<option selected>{{ $utilization->month }}</option>
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
	         				<input type="number" class="form-control" name="year" id="year" placeholder="Year" value="{{ $utilization->year }}">
	        			</div>
	      			</div>
	      			<div class="form-group">
	        			<label for="initial_meter" class="col-sm-2 control-label">Initial Stand Meter</label>
	        			<div class="col-sm-10">
	         				<input type="number" class="form-control" name="initial_meter" id="initial_meter" placeholder="Eg. 21849" value="{{ $utilization->initial_meter }}">
	        			</div>
	      			</div>
	      			<div class="form-group">
	        			<label for="final_meter" class="col-sm-2 control-label">Final Stand Meter</label>
	        			<div class="col-sm-10">
	         				<input type="number" class="form-control" name="final_meter" id="final_meter" placeholder="Eg. 21149" value="{{ $utilization->final_meter }}">
	        			</div>
	      			</div>
    			</div>
    			<div class="box-footer">
      				<button type="submit" class="btn btn-info pull-right">Update Utilization</button>
    			</div>
  			</form>
		</div>
    </div>
</section>
@endsection