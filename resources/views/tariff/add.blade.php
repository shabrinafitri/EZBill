@extends('layouts.admin-app')
@section('title','- ADD TARIFF')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
        			<h3 class="box-title">Add Tariff</h3>
            	</div>
            	<form class="form-horizontal" method="POST" action="{{ route('admin.save.tariff') }}">
               	{{ csrf_field() }}
              		<div class="box-body">
                		<div class="form-group">
                  			<label for="tariff_codes" class="col-sm-2 control-label">Tariff Codes</label>
                  			<div class="col-sm-10">
                    			<input type="text" class="form-control" name="tariff_codes" id="tariff_codes" placeholder="Eg. I-1/TR">
                  			</div>
                		</div>
		                <div class="form-group">
		                  	<label for="power" class="col-sm-2 control-label">Power</label>
		                  	<div class="col-sm-10">
		                    	<input type="number" class="form-control" name="power" id="power" placeholder="Eg. 900">
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label for="tariff_per_kwh" class="col-sm-2 control-label">Tariff / kWh</label>
		                  	<div class="col-sm-10">
		                    	<input type="text" class="form-control" name="tariff_per_kwh" id="tariff_per_kwh" placeholder="Eg. 0.129">
		                  	</div>
                		</div>
              		</div>
              		<div class="box-footer">
                		<button type="submit" class="btn btn-info pull-right">Add Tariff</button>
              		</div>
            	</form>
          	</div>
		</div>
	</div>
</section>
@endsection