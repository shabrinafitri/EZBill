@extends('layouts.admin-app')
@section('title','- BILLING DATA')
@section('content')
<section class="content">
	<div class="row">
        <div class="col-xs-12">
          	<div class="box">
            	<div class="box-header">
              		<h3 class="box-title">Billing Data Table</h3>
              		<a href="{{route('admin.pdf.bill')}}" class="btn btn-success pull-right">PDF</a>
            	</div>
            	<div class="box-body table-responsive no-padding">
	              	<table class="table table-hover">
		                <tbody>
		                	<tr>
		                		<th>Customer ID</th>
			                  	<th>Customer Name</th>
			                  	<th>Month</th>
			                  	<th>Year</th>
			                  	<th>Amount Meter</th>
			                  	<th>Billing Charges</th>
			                  	<th>Status</th>
			                  	<th>Action </th>
			                </tr>
			                @foreach($table as $key)
			                <tr>
			                	<td>{{$key->id_customer}}</td>
			                	<td>{{$key->name}}</td>
			                	<td>{{$key->month}}</td>
			                	<td>{{$key->year}}</td>
			                	<td>{{$key->amount_meter}}</td>
			                	<td>Rp. {{$key->billing_charges}}</td>
			                	<td>@if($key->status==1)<label style="color: red;">NOT YET PAID</label> @else <label style="color: green;">PAID</label> @endif</td>
			                	<td>
			                	@if( $key->status == 2 )
			                	<!-- <a href="" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a> -->
    							@else
    							<a href="{{ route('admin.add.payment', $key->id ) }}"><button class="btn btn-warning" title="Pay Now"><span class="fa fa-money"></span></button></a>
    							@endif
    							</td>
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
            	</div>
            	<div class="box-footer clearfix">
	              	<ul class="pagination pagination-sm no-margin pull-left">
		            	<li><a href="#">«</a></li>
		                <li><a href="#">1</a></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">»</a></li>
		            </ul>
	            </div>
            </div>
        </div>
    </div>
</section>
@endsection