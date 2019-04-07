@extends('layouts.admin-app')
@section('title','- ADD PAYMENT')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
        			<h3 class="box-title">Add Payment</h3>
            	</div>
            	<form class="form-horizontal" method="POST" action="{{ route('admin.save.payment') }}">
               	{{ csrf_field() }}
               	<input type="hidden" name="id_billing" value="{{ $billing->id }}">
               	<input type="hidden" name="id_customer" value="{{ $billing->id_customer }}">
               	<input type="hidden" name="billing_month" value="{{ $billing->month }}">
              		<div class="box-body">
              			<div class="form-group">
					       	<label for="name" class="col-sm-2 control-label">Date of Payment</label>
					        <div class="input-group date col-sm-9">
			                  	<div class="input-group-addon">
			                    	<i class="fa fa-calendar"></i>
			                  	</div>
			                  	<input type="date" class="form-control pull-right" name="date">
			                </div>
					    </div>
              		</div>
              		<div class="box-footer">
                		<button type="submit" class="btn btn-info pull-right">Add Payment</button>
              		</div>
            	</form>
          	</div>
		</div>
	</div>
</section>
@endsection