@extends('layouts.admin-app')
@section('title','- EDIT CUSTOMER')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
        			<h3 class="box-title">EDIT Customer</h3>
            	</div>
            	<form class="form-horizontal" method="POST" action="{{ route('admin.update.customer') }}">
               	{{ csrf_field() }}
               	<input type="hidden" name="id" value="{{$customer->id}}">
              		<div class="box-body">
              			<input type="hidden" class="form-control" name="id_customer" value="{{ $customer->id_customer }}">
              			<input type="hidden" class="form-control" name="no_meter" value="{{ $customer->no_meter }}">
                		<div class="form-group">
                  			<label for="name" class="col-sm-2 control-label">Name</label>
                  			<div class="col-sm-10">
                    			<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $customer->name }}">
                  			</div>
                		</div>
		                <div class="form-group">
		                  	<label for="address" class="col-sm-2 control-label">Address</label>
		                  	<div class="col-sm-10">
		                    	<input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{ $customer->address }}">
		                  	</div>
                		</div>
                		<div class="form-group">
		                	<label for="tariff_codes" class="col-sm-2 control-label">Tariff Codes</label>
		                	<div class="col-sm-10">
			                	<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tariff_codes">
			                  		<option selected value="{{ $customer->tariff_codes }}">{{ $customer->tariff_codes }}</option>
			                  		@foreach($tariff as $key)
			                  		<option value="{{$key->tariff_codes}}">{{$key->tariff_codes}} - {{$key->power}} VA</option>
			                  		@endforeach
			                  	</select>
		                  	</div>
		              	</div>
              		</div>
	              	<div class="box-footer">
	                	<button type="submit" class="btn btn-info pull-right">Update Customer</button>
	              	</div>
	          	</form>
	        </div>
	    </div>
  	</div>
</section>
@endsection