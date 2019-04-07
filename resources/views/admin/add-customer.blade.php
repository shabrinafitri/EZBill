@extends('layouts.admin-app')
@section('title','- ADD CUSTOMER')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
        			<h3 class="box-title">Add Customer</h3>
            	</div>
            	<form class="form-horizontal" method="POST" action="{{ route('admin.save.customer') }}">
               	{{ csrf_field() }}
              		<div class="box-body">
              			<input type="hidden" class="form-control" name="password" value="password">
              			<input type="hidden" class="form-control" name="role" value="2">
                		<div class="form-group">
                  			<label for="name" class="col-sm-2 control-label">Name</label>
                  			<div class="col-sm-10">
                    			<input type="text" class="form-control" name="name" id="name" placeholder="Name">
                  			</div>
                		</div>
		                <div class="form-group">
		                  	<label for="email" class="col-sm-2 control-label">Email</label>
		                  	<div class="col-sm-10">
		                    	<input type="email" class="form-control" name="email" id="email" placeholder="Email">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label for="address" class="col-sm-2 control-label">Address</label>
		                  	<div class="col-sm-10">
		                    	<textarea class="form-control" rows="3" name="address" id="address" placeholder="Address"></textarea>
		                  	</div>
                		</div>
                		<div class="form-group">
		                	<label for="tariff_codes" class="col-sm-2 control-label">Tariff Codes</label>
		                	<div class="col-sm-10">
			                	<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tariff_codes">
			                  		<option selected>Choose One</option>
			                  		@foreach($tariff as $key)
			                  		<option value="{{$key->tariff_codes}}">{{$key->tariff_codes}} - {{$key->power}} VA</option>
			                  		@endforeach
			                  	</select>
		                  	</div>
		              	</div>
              		</div>
              		<div class="box-footer">
                		<button type="submit" class="btn btn-info pull-right">Add Customer</button>
              		</div>
            	</form>
          	</div>
		</div>
	</div>
</section>
@endsection